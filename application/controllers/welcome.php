<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
                $this->load->model("scola_model");
                
                
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			//redirect('/auth/login/');
                        $this->login();
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			//$this->load->view('welcome', $data);
                         $this->login();
		}
	}
        
        function login()
	{
            
            $this->load->view("scola_login");
	}
        
        
        function scola_teacher()
	{
            
            if($this->session->userdata("user_id")!=""){
                $result=$this->scola_model->get_user($this->session->userdata("user_id"));
                if($result!=""){
                foreach ($result->result() as $row){
                    $data["user_id"]=$row->user_id;
                    $data["username"]=$row->username;
                    $data["email_id"]=$row->email_id;
                    $data["works"]=$row->works;
                    $data["studied"]=$row->studied;
                    $data["subject"]=$row->subject;
                    $data["district"]=$row->district;
                    $data["phone"]=$row->phone;
                    $data["about"]=$row->about;
                    $data["banner"]=$row->banner;
                    $data["profile_pic"]=$row->profile_pic;
                    $data["website"]=$row->website;
                    $data["facebook"]=$row->facebook;
                    $data["twitter"]=$row->twitter;
                    $data["youtube"]=$row->youtube;
                }
                $this->load->view("scola_teacher",$data);
                }
                else{
                    $this->load->view("scola_teacher");
                }
            }
            else{
                redirect("auth/logout");
            }
	}
        
        
        function upload_profile_pic(){
            header("Access-Control-Allow-Origin: *");
            $data["profile_pic"] = $this->do_upload();
            echo "show".$data["profile_pic"];
            
            
        }
        
        
        	public function upload_file()
                {
                   $status = "";
                   $msg = "";
                    if($this->input->post("post_type")=="info"){
                        $file_element_name = 'userfile';
                    }
                    elseif($this->input->post("post_type")=="event"){
                        $file_element_name = 'userfile_event';
                    }
                 //  $file_element_name = 'userfile';
                   

                   if ($status != "error")
                   {
                      $config['upload_path'] = './upload/upload_file/';
                      $config['allowed_types'] = 'gif|jpg|png';
                      $config['max_size']  = 1024 * 8;
                      $config['encrypt_name'] = FALSE;

                      $this->load->library('upload', $config);

                      if (!$this->upload->do_upload($file_element_name))
                      {
                         $status = 'error';
                         $msg = $this->upload->display_errors('', '');
                      }
                      else
                      {
                         $data = $this->upload->data();
                         echo "file".$this->input->post("post_id")."";
                         $file_id = $this->scola_model->insert_file($this->input->post("post_id"),$data['file_name'],1);
                         if($file_id)
                         {
                            $status = "success";
                            $msg = "File successfully uploaded";
                         }
                         else
                         {
                            unlink($data['full_path']);
                            $status = "error";
                            $msg = "Something went wrong when saving the file, please try again.";
                         }
                      }
                      @unlink($_FILES[$file_element_name]);
                   }
                   echo json_encode(array('status' => $status, 'msg' => $msg));
                }
                
                
                
                public function upload_photo()
                {
                   $status = "";
                   $msg = "";
                   
                   if($this->input->post("post_type")=="info"){
                       $file_element_name = 'userphoto';
                   }
                   
                   elseif($this->input->post("post_type")=="event"){
                       $file_element_name = 'userphoto_event';
                   }
                   elseif($this->input->post("post_type")=="audio"){
                       $file_element_name = 'userphoto_audio';
                   }
                   
                   echo $file_element_name;
                   

                   if ($status != "error")
                   {
                      $config['upload_path'] = './upload/upload_photo/';
                      $config['allowed_types'] = 'gif|jpg|png';
                      $config['max_size']  = 1024 * 8;
                      $config['encrypt_name'] = FALSE;

                      $this->load->library('upload', $config);

                      if (!$this->upload->do_upload($file_element_name))
                      {
                         $status = 'error';
                         $msg = $this->upload->display_errors('', '');
                      }
                      else
                      {
                         $data = $this->upload->data();
                         echo "file".$this->input->post("post_id")."";
                         $file_id = $this->scola_model->insert_file($this->input->post("post_id"),$data['file_name'],2);
                         if($file_id)
                         {
                            $status = "success";
                            $msg = "File successfully uploaded";
                         }
                         else
                         {
                            unlink($data['full_path']);
                            $status = "error";
                            $msg = "Something went wrong when saving the file, please try again.";
                         }
                      }
                      @unlink($_FILES[$file_element_name]);
                   }
                   echo json_encode(array('status' => $status, 'msg' => $msg));
                }
                
                
      	public function upload_audio()
                {
                   $status = "";
                   $msg = "";
                    if($this->input->post("post_type")=="info"){
                        $file_element_name = 'userfile';
                    }
                    elseif($this->input->post("post_type")=="event"){
                        $file_element_name = 'userfile_event';
                    }
                    elseif($this->input->post("post_type")=="audio"){
                        $file_element_name = 'userfile_audio';
                    }
                 //  $file_element_name = 'userfile';
                   

                   if ($status != "error")
                   {
                      $config['upload_path'] = './upload/upload_audio/';
                      $config['allowed_types'] = 'mp3|mp4|wav|m4a';
                      $config['max_size']  = 1024 * 8;
                      $config['encrypt_name'] = FALSE;

                      $this->load->library('upload', $config);

                      if (!$this->upload->do_upload($file_element_name))
                      {
                         $status = 'error';
                         $msg = $this->upload->display_errors('', '');
                      }
                      else
                      {
                         $data = $this->upload->data();
                         echo "file".$this->input->post("post_id")."";
                         $file_id = $this->scola_model->insert_file($this->input->post("post_id"),$data['file_name'],3);
                         if($file_id)
                         {
                            $status = "success";
                            $msg = "File successfully uploaded";
                         }
                         else
                         {
                            unlink($data['full_path']);
                            $status = "error";
                            $msg = "Something went wrong when saving the file, please try again.";
                         }
                      }
                      @unlink($_FILES[$file_element_name]);
                   }
                   echo json_encode(array('status' => $status, 'msg' => $msg));
                }
                  
                
          
          
          
          
          
          
          



//---------------------------------------Personal information insertion------------------------



function update_teacher_works(){
    
   $this->scola_model->update_teacher_works_model($this->session->userdata("user_id"),$this->input->post("teacher_works"));
  $works = $this->scola_model->get_teacher_works_model($this->session->userdata("user_id"));
   echo $works;
}


function update_teacher_name(){
     
   $this->scola_model->update_teacher_name_model($this->session->userdata("user_id"),$this->input->post("teacher_name"));
     $name = $this->scola_model->get_teacher_name_model($this->session->userdata("user_id"));
    echo $name;
}

function update_teacher_studied(){
     
   $this->scola_model->update_teacher_studied_model($this->session->userdata("user_id"),$this->input->post("teacher_studied"));
     $studied = $this->scola_model->get_teacher_studied_model($this->session->userdata("user_id"));
    echo $studied;
}

function update_teacher_subject(){
     
   $this->scola_model->update_teacher_subject_model($this->session->userdata("user_id"),$this->input->post("teacher_subject"));
     $subject = $this->scola_model->get_teacher_subject_model($this->session->userdata("user_id"));
    echo $subject;
}

function update_teacher_district(){
     
   $this->scola_model->update_teacher_district_model($this->session->userdata("user_id"),$this->input->post("teacher_district"));
     $district = $this->scola_model->get_teacher_district_model($this->session->userdata("user_id"));
    echo $district;
}


function update_teacher_phone(){
     
   $this->scola_model->update_teacher_phone_model($this->session->userdata("user_id"),$this->input->post("teacher_phone"));
     $phone = $this->scola_model->get_teacher_phone_model($this->session->userdata("user_id"));
    echo $phone;
}

function update_teacher_website(){
     
   $this->scola_model->update_teacher_website_model($this->session->userdata("user_id"),$this->input->post("teacher_website"));
     $website = $this->scola_model->get_teacher_website_model($this->session->userdata("user_id"));
    echo $website;
}


function update_teacher_facebook(){
     
   $this->scola_model->update_teacher_facebook_model($this->session->userdata("user_id"),$this->input->post("teacher_facebook"));
     $facebook = $this->scola_model->get_teacher_facebook_model($this->session->userdata("user_id"));
    echo $facebook;
}


function update_teacher_twitter(){
     
   $this->scola_model->update_teacher_twitter_model($this->session->userdata("user_id"),$this->input->post("teacher_twitter"));
     $twitter = $this->scola_model->get_teacher_twitter_model($this->session->userdata("user_id"));
    echo $twitter;
}


function update_teacher_youtube(){
     
   $this->scola_model->update_teacher_youtube_model($this->session->userdata("user_id"),$this->input->post("teacher_youtube"));
     $youtube = $this->scola_model->get_teacher_youtube_model($this->session->userdata("user_id"));
    echo $youtube;
}


function update_teacher_about(){
     
   $this->scola_model->update_teacher_about_model($this->session->userdata("user_id"),$this->input->post("about"));
     $about = $this->scola_model->get_teacher_about_model($this->session->userdata("user_id"));
   // echo $about;
}



function update_personal_info(){
    $data["user_id"]=$this->session->userdata("user_id");
    $data["username"]=$this->input->post("teacher_name");
    $data["email_id"]=$this->input->post("teacher_email");
    $data["about"]=$this->input->post("teacher_about");
    $data["works"]=$this->input->post("teacher_works");
    $data["studied"]=$this->input->post("teacher_university");
    $data["subject"]=$this->input->post("teacher_subject");
    $data["district"]=$this->input->post("teacher_district");
    
    $this->scola_model->update_personal_info_model($data);
     
}
        
    function create_info_post(){
       $post_id= $this->scola_model->create_info_post_model($this->session->userdata("user_id"),$this->session->userdata("username"),$this->input->post("post_title"),$this->input->post("editor"));
       echo $post_id;
    }

    
    function create_event_post(){
        $post_id= $this->scola_model->create_event_post_model($this->session->userdata("user_id"),$this->session->userdata("username"),$this->input->post("post_title"),$this->input->post("editor"),$this->input->post("event_date"));
       echo $post_id;
    }
    
    function create_audio_post(){
       $post_id= $this->scola_model->create_audio_post_model($this->session->userdata("user_id"),$this->session->userdata("username"),$this->input->post("post_title"),$this->input->post("editor"));
       echo $post_id;
    }
    
    function create_video_post(){
       $post_id= $this->scola_model->create_video_post_model($this->session->userdata("user_id"),$this->session->userdata("username"),$this->input->post("post_title"),$this->input->post("editor"));
       echo $post_id;
    }
    
    function upload_video(){
        $file_id = $this->scola_model->insert_file_video($this->input->post("post_id"),"video_post",4,  $this->input->post("video_link"));
        echo $file_id;
    }
    
    
    function create_form_post(){
       $post_id= $this->scola_model->create_form_post_model($this->session->userdata("user_id"),$this->session->userdata("username"),$this->input->post("post_title"),$this->input->post("editor"));
       echo $post_id;
    }

    
    //----------------------------------PLUPLOAD------------------------------------------------------------------
    
    public function uploadtoserver()
        {
    
    echo "here";
    
/**
 * upload.php
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under GPL License.
 *
 * License: http://www.plupload.com/license
 * Contributing: http://www.plupload.com/contributing
 */

// HTTP headers for no cache etc
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Settings
//$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
$targetDir = './upload/upload_gallery/';

$cleanupTargetDir = false; // Remove old files
//$maxFileAge = 5 * 3600; // Temp file age in seconds

// 5 minutes execution time
@set_time_limit(5 * 60);

// Uncomment this one to fake upload time
// usleep(5000);

// Get parameters
$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
$fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

// Clean the fileName for security reasons
$fileName = preg_replace('/[^\w\._]+/', '_', $fileName);

// Make sure the fileName is unique but only if chunking is disabled
if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
	$ext = strrpos($fileName, '.');
	$fileName_a = substr($fileName, 0, $ext);
	$fileName_b = substr($fileName, $ext);

	$count = 1;
	while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
		$count++;

	$fileName = $fileName_a . '_' . $count . $fileName_b;
}

$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

// Create target dir
if (!file_exists($targetDir))
	@mkdir($targetDir);

// Remove old temp files	
if ($cleanupTargetDir) {
	if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
		while (($file = readdir($dir)) !== false) {
			$tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

			// Remove temp file if it is older than the max age and is not the current file
			if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part")) {
				@unlink($tmpfilePath);
			}
		}
		closedir($dir);
	} else {
		die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
	}
}	

// Look for the content type header
if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
	$contentType = $_SERVER["HTTP_CONTENT_TYPE"];

if (isset($_SERVER["CONTENT_TYPE"]))
	$contentType = $_SERVER["CONTENT_TYPE"];

// Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
if (strpos($contentType, "multipart") !== false) {
	if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
		// Open temp file
		$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
		if ($out) {
			// Read binary input stream and append it to temp file
			$in = @fopen($_FILES['file']['tmp_name'], "rb");

			if ($in) {
				while ($buff = fread($in, 4096))
					fwrite($out, $buff);
			} else
				die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
			@fclose($in);
			@fclose($out);
			@unlink($_FILES['file']['tmp_name']);
		} else
			die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
	} else
		die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
} else {
	// Open temp file
	$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
	if ($out) {
		// Read binary input stream and append it to temp file
		$in = @fopen("php://input", "rb");

		if ($in) {
			while ($buff = fread($in, 4096))
				fwrite($out, $buff);
		} else
			die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

		@fclose($in);
		@fclose($out);
	} else
		die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
}

// Check if file has been uploaded
if (!$chunks || $chunk == $chunks - 1) {
	// Strip the temp .part suffix off 
	rename("{$filePath}.part", $filePath);
}

die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    
    
        }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */