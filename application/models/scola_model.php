<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class scola_model extends CI_Model
{
	private $table_name			= 'users';			// user accounts
	private $profile_table_name	= 'user_profiles';	// user profiles

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->table_name			= $ci->config->item('db_table_prefix', 'tank_auth').$this->table_name;
		$this->profile_table_name	= $ci->config->item('db_table_prefix', 'tank_auth').$this->profile_table_name;
	}

	/**
	 * Get user record by Id
	 *
	 * @param	int
	 * @param	bool
	 * @return	object
	 */
	function get_user_by_id($user_id, $activated)
	{
		$this->db->where('id', $user_id);
		$this->db->where('activated', $activated ? 1 : 0);

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by login (username or email)
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_login($login)
	{
		$this->db->where('LOWER(username)=', strtolower($login));
		$this->db->or_where('LOWER(email)=', strtolower($login));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by username
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_username($username)
	{
		$this->db->where('LOWER(username)=', strtolower($username));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by email
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_email($email)
	{
		$this->db->where('LOWER(email)=', strtolower($email));

		$query = $this->db->get($this->table_name);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Check if username available for registering
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_username_available($username)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(username)=', strtolower($username));

		$query = $this->db->get($this->table_name);
		return $query->num_rows() == 0;
	}

	/**
	 * Check if email available for registering
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_email_available($email)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(email)=', strtolower($email));
		$this->db->or_where('LOWER(new_email)=', strtolower($email));

		$query = $this->db->get($this->table_name);
		return $query->num_rows() == 0;
	}

	/**
	 * Create new user record
	 *
	 * @param	array
	 * @param	bool
	 * @return	array
	 */
	function create_user($data, $activated = TRUE)
	{   
           
           
		$data['created'] = date('Y-m-d H:i:s');
		$data['activated'] = $activated ? 1 : 0;

		if ($this->db->insert($this->table_name, $data)) {
			$user_id = $this->db->insert_id();
			if ($activated)	$this->create_profile($user_id);
			return array('user_id' => $user_id);
		}
		return NULL;
	}

	/**
	 * Activate user if activation key is valid.
	 * Can be called for not activated users only.
	 *
	 * @param	int
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function activate_user($user_id, $activation_key, $activate_by_email)
	{
		$this->db->select('1', FALSE);
		$this->db->where('id', $user_id);
		if ($activate_by_email) {
			$this->db->where('new_email_key', $activation_key);
		} else {
			$this->db->where('new_password_key', $activation_key);
		}
		$this->db->where('activated', 0);
		$query = $this->db->get($this->table_name);

		if ($query->num_rows() == 1) {

			$this->db->set('activated', 1);
			$this->db->set('new_email_key', NULL);
			$this->db->where('id', $user_id);
			$this->db->update($this->table_name);

			$this->create_profile($user_id);
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Purge table of non-activated users
	 *
	 * @param	int
	 * @return	void
	 */
	function purge_na($expire_period = 172800)
	{
		$this->db->where('activated', 0);
		$this->db->where('UNIX_TIMESTAMP(created) <', time() - $expire_period);
		$this->db->delete($this->table_name);
	}

	/**
	 * Delete user record
	 *
	 * @param	int
	 * @return	bool
	 */
	function delete_user($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete($this->table_name);
		if ($this->db->affected_rows() > 0) {
			$this->delete_profile($user_id);
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Set new password key for user.
	 * This key can be used for authentication when resetting user's password.
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function set_password_key($user_id, $new_pass_key)
	{
		$this->db->set('new_password_key', $new_pass_key);
		$this->db->set('new_password_requested', date('Y-m-d H:i:s'));
		$this->db->where('id', $user_id);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Check if given password key is valid and user is authenticated.
	 *
	 * @param	int
	 * @param	string
	 * @param	int
	 * @return	void
	 */
	function can_reset_password($user_id, $new_pass_key, $expire_period = 900)
	{
		$this->db->select('1', FALSE);
		$this->db->where('id', $user_id);
		$this->db->where('new_password_key', $new_pass_key);
		$this->db->where('UNIX_TIMESTAMP(new_password_requested) >', time() - $expire_period);

		$query = $this->db->get($this->table_name);
		return $query->num_rows() == 1;
	}

	/**
	 * Change user password if password key is valid and user is authenticated.
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	int
	 * @return	bool
	 */
	function reset_password($user_id, $new_pass, $new_pass_key, $expire_period = 900)
	{
		$this->db->set('password', $new_pass);
		$this->db->set('new_password_key', NULL);
		$this->db->set('new_password_requested', NULL);
		$this->db->where('id', $user_id);
		$this->db->where('new_password_key', $new_pass_key);
		$this->db->where('UNIX_TIMESTAMP(new_password_requested) >=', time() - $expire_period);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Change user password
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function change_password($user_id, $new_pass)
	{
		$this->db->set('password', $new_pass);
		$this->db->where('id', $user_id);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Set new email for user (may be activated or not).
	 * The new email cannot be used for login or notification before it is activated.
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function set_new_email($user_id, $new_email, $new_email_key, $activated)
	{
		$this->db->set($activated ? 'new_email' : 'email', $new_email);
		$this->db->set('new_email_key', $new_email_key);
		$this->db->where('id', $user_id);
		$this->db->where('activated', $activated ? 1 : 0);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Activate new email (replace old email with new one) if activation key is valid.
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function activate_new_email($user_id, $new_email_key)
	{
		$this->db->set('email', 'new_email', FALSE);
		$this->db->set('new_email', NULL);
		$this->db->set('new_email_key', NULL);
		$this->db->where('id', $user_id);
		$this->db->where('new_email_key', $new_email_key);

		$this->db->update($this->table_name);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Update user login info, such as IP-address or login time, and
	 * clear previously generated (but not activated) passwords.
	 *
	 * @param	int
	 * @param	bool
	 * @param	bool
	 * @return	void
	 */
	function update_login_info($user_id, $record_ip, $record_time)
	{
		$this->db->set('new_password_key', NULL);
		$this->db->set('new_password_requested', NULL);

		if ($record_ip)		$this->db->set('last_ip', $this->input->ip_address());
		if ($record_time)	$this->db->set('last_login', date('Y-m-d H:i:s'));

		$this->db->where('id', $user_id);
		$this->db->update($this->table_name);
	}

	/**
	 * Ban user
	 *
	 * @param	int
	 * @param	string
	 * @return	void
	 */
	function ban_user($user_id, $reason = NULL)
	{
		$this->db->where('id', $user_id);
		$this->db->update($this->table_name, array(
			'banned'		=> 1,
			'ban_reason'	=> $reason,
		));
	}

	/**
	 * Unban user
	 *
	 * @param	int
	 * @return	void
	 */
	function unban_user($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->update($this->table_name, array(
			'banned'		=> 0,
			'ban_reason'	=> NULL,
		));
	}

	/**
	 * Create an empty profile for a new user
	 *
	 * @param	int
	 * @return	bool
	 */
	private function create_profile($user_id)
	{
		$this->db->set('user_id', $user_id);
		return $this->db->insert($this->profile_table_name);
	}

	/**
	 * Delete user profile
	 *
	 * @param	int
	 * @return	void
	 */
	private function delete_profile($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete($this->profile_table_name);
	}
        
        //-----------------------------------SCOLA---------------------------------------------------
        
      //------------------------------------works--------------------------------------  
        public function update_teacher_works_model($user_id,$works){
           
            
            $this->db->set('works',$works);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
        }
       
        
        
        function get_teacher_works_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->works;
                   
                } 
                
	}
        
    //-------------------------------teacher name--------------------------------------------
        function update_teacher_name_model($user_id , $username){
           
            $this->db->set('username',$username);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            $this->db->set('username',$username);
            $this->db->where('id', $user_id);
            $this->db->update('users');
            
            
        }
        
        
        function get_teacher_name_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->username;
                   
                }
                
         }
         
         
         //-------------------------------teacher studied--------------------------------------------
        function update_teacher_studied_model($user_id , $studied){
           
            $this->db->set('studied', $studied);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_studied_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->studied;
                   
                }
                
         }
         
          //-------------------------------teacher subject--------------------------------------------
        function update_teacher_subject_model($user_id , $subject){
           
            $this->db->set('subject', $subject);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_subject_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->subject;
                   
                }
                
         }
         
         
          //-------------------------------teacher district--------------------------------------------
        function update_teacher_district_model($user_id , $district){
           
            $this->db->set('district', $district);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_district_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->district;
                   
                }
                
         }
         
         
         
          //-------------------------------teacher phone--------------------------------------------
        function update_teacher_phone_model($user_id , $phone){
           
            $this->db->set('phone', $phone);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_phone_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->phone;
                   
                }
                
         }
         
         
         //-------------------------------teacher website--------------------------------------------
        function update_teacher_website_model($user_id , $website){
           
            $this->db->set('website', $website);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_website_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->website;
                   
                }
                
         }
        
         
          //-------------------------------teacher facebook--------------------------------------------
        function update_teacher_facebook_model($user_id , $facebook){
           
            $this->db->set('facebook', $facebook);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_facebook_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->facebook;
                   
                }
                
         }
         
         
         
          //-------------------------------teacher twitter--------------------------------------------
        function update_teacher_twitter_model($user_id , $twitter){
           
            $this->db->set('twitter', $twitter);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_twitter_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->twitter;
                   
                }
                
         }
         
          //-------------------------------teacher about--------------------------------------------
        function update_teacher_about_model($user_id , $about){
           
            $this->db->set('about', $about);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_about_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->about;
                   
                }
                
         }
         
         
        
         
          //-------------------------------teacher youtube--------------------------------------------
        function update_teacher_youtube_model($user_id , $youtube){
           
            $this->db->set('youtube', $youtube);
            $this->db->where('user_id', $user_id);
            $this->db->update('user_profile_info');
            
            
            
        }
        
        
        function get_teacher_youtube_model($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_profile_info');
		foreach ($query->result() as $rows)
                {
                   return $rows->youtube;
                   
                }
                
         }
   //----------------------------------------------------------------------------------------------     
        
        function get_user($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get("user_profile_info");
		//if ($query->num_rows() == 1) 
              //      return $query->row();
		//return NULL;
                return $query;
	}

        
        function activate_profile($user_id)
        {
            $this->db->where('id', $user_id);
            $query = $this->db->get('users');
            foreach ($query->result() as $rows){
               $username = $rows->username; 
               $email_id= $rows->email;
            } 
                  
            $this->db->set('user_id', $user_id);
            $this->db->set('username', $username);
            $this->db->set('email_id', $email_id);


            $result = $this->db->insert('user_profile_info');
           
        }
        
  //---------------------------------------update personal info--------------------------------      
        
        function update_personal_info_model($data){
             $this->db->set('username', $data["username"]);
             $this->db->set('about', $data["about"]);
              $this->db->set('studied', $data["studied"]);
               $this->db->set('works', $data["works"]);
                $this->db->set('subject', $data["subject"]);
                 $this->db->set('district', $data["district"]);
            
            $this->db->where('user_id', $data['user_id']);
            $this->db->update('user_profile_info');
        }
        
    //---------------------------------------create information post-------------------------------------
        
       function create_info_post_model($user_id,$username,$post_title,$editor){
            $now =  date('Y-m-d H:i:s');
           
           $this->db->set('post_type', 1);
             $this->db->set('user_id', $user_id);
              $this->db->set('username', $username);
               $this->db->set('title', $post_title);
                $this->db->set('description', $editor);
                 $this->db->set('post_date', $now);
            $this->db->set('event_date', 0);
            
           
            $this->db->insert('posts');
            
            $query= $this->db->query("Select * from posts");
            
            return $query->last_row()->post_id;
       }
       
       function insert_file($post_id,$file_name,$media_type){
           //FILES :1
           //PHOTOS:2
           //AUDIO:3
           //VIDEO:4
            $this->db->set('post_id', $post_id);
             $this->db->set('media_type',$media_type);
              $this->db->set('media_data', $file_name);
               $this->db->set('media_url', 0);
               
            $this->db->insert('media_post');
            
            $query= $this->db->query("Select * from media_post");
            
            return $query->last_row()->media_post_id;
            
       }
       
       
       function insert_file_video($post_id,$file_name,$media_type,$media_url){
           //FILES :1
           //PHOTOS:2
           //AUDIO:3
           //VIDEO:4
            $this->db->set('post_id', $post_id);
             $this->db->set('media_type',$media_type);
              $this->db->set('media_data', $file_name);
               $this->db->set('media_url', $media_url);
               
            $this->db->insert('media_post');
            
            $query= $this->db->query("Select * from media_post");
            
            return $query->last_row()->media_post_id;
            
       }
       
       
       
 //---------------------------------event post--------------------------------------------------
       
        function create_event_post_model($user_id,$username,$post_title,$editor,$event_date){
            $now =  date('Y-m-d H:i:s');
           
           $this->db->set('post_type', 2);
           $this->db->set('user_id', $user_id);
           $this->db->set('username', $username);
           $this->db->set('title', $post_title);
           $this->db->set('description', $editor);
           $this->db->set('post_date', $now);
           $this->db->set('event_date', $event_date);
           $this->db->set('event_date', 0);
            
           
            $this->db->insert('posts');
            
            $query= $this->db->query("Select * from posts");
            
            return $query->last_row()->post_id;
       }
       
       
         //---------------------------------------create audio post-------------------------------------
        
       function create_audio_post_model($user_id,$username,$post_title,$editor){
            $now =  date('Y-m-d H:i:s');
           
           $this->db->set('post_type', 6);
             $this->db->set('user_id', $user_id);
              $this->db->set('username', $username);
               $this->db->set('title', $post_title);
                $this->db->set('description', $editor);
                 $this->db->set('post_date', $now);
            $this->db->set('event_date', 0);
            
           
            $this->db->insert('posts');
            
            $query= $this->db->query("Select * from posts");
            
            return $query->last_row()->post_id;
       }
       
       
           //---------------------------------------create video post-------------------------------------
        
       function create_video_post_model($user_id,$username,$post_title,$editor){
            $now =  date('Y-m-d H:i:s');
           
           $this->db->set('post_type', 4);
             $this->db->set('user_id', $user_id);
              $this->db->set('username', $username);
               $this->db->set('title', $post_title);
                $this->db->set('description', $editor);
                 $this->db->set('post_date', $now);
            $this->db->set('event_date', 0);
            
           
            $this->db->insert('posts');
            
            $query= $this->db->query("Select * from posts");
            
            return $query->last_row()->post_id;
       }
       
       
       //---------------------------------form post--------------------------------------------------
       
        function create_form_post_model($user_id,$username,$post_title,$editor){
            $now =  date('Y-m-d H:i:s');
           
           $this->db->set('post_type', 5);
           $this->db->set('user_id', $user_id);
           $this->db->set('username', $username);
           $this->db->set('title', $post_title);
           $this->db->set('description', $editor);
           $this->db->set('post_date', $now);
           $this->db->set('event_date', 0);
           $this->db->set('event_date', 0);
            
           
            $this->db->insert('posts');
            
            $query= $this->db->query("Select * from posts");
            
            return $query->last_row()->post_id;
       }
      
       
       
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */