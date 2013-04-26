

jQuery(document).ready(function(){
    


//---------------------------------------------Register ajax----------------------------------------
$(".register_sub").click(function () 
        { 
        
          
          var email=$("#email").val();
          var password=$("#password").val();
          var username=$("#username").val();
         
           $('.password_error').css("display","none");
            $('.email_error').css("display","none");
             $('.username_error').css("display","none");
             
              $('.email_error').text("");
          $('.username_error').text("");
          $('.password_error').text("");
           $('.succesfull_register').text("");
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/register";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'email':email,'password':password,'username':username},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
	//  alert(output_string);
                   
             if(output_string=="email_present"){
                 $('.email_error').append('Email already exists');
                  $('.email_error').css("display","block");
               
             }
             else if(output_string=="invalid_email"){
                 $('.email_error').append('Invalid email');
                  $('.email_error').css("display","block");
               
             }
             else if(output_string=="username_present"){
                 $('.username_error').append('Username already exists');
                  $('.username_error').css("display","block");
                
             }
             else if(output_string=="succesfull_register"){
                $('.succesfull_register').append('You have successfully registered.');
                 $('.succesfull_register').css('display',"block");
                
             }
             
             //---------------------------blank registeration fields----------------
             else if(output_string=="username_blank"){
                 $('.username_error').append('This field is required');
                  $('.username_error').css("display","block");
             //    alert("username");
                
             }
             else if(output_string=="password_blank"){
                  $('.password_error').css("display","block");
                 $('.password_error').append('This field is required');
                
             }
             else if(output_string=="email_blank"){
                  $('.email_error').css("display","block");
                $('.email_error').append('This field is required'); 
              //  alert(output_string);
             }
             else if(output_string=="username_blankpassword_blank"){
                 $('.password_error').css("display","block");
                  $('.username_error').css("display","block");
                 $('.username_error').append('This field is required');
                  $('.password_error').append('This field is required');
                // alert(output_string);
             }
             else if(output_string=="username_blankemail_blank"){
                 
                  $('.username_error').css("display","block");
                  $('.email_error').css("display","block");
                 $('.username_error').append('This field is required');
                  $('.email_error').append('This field is required');
               //  alert(output_string);
             }
             else if(output_string=="email_blankpassword_blank"){
                 $('.password_error').css("display","block");
                  $('.email_error').css("display","block");
                 $('.password_error').append('This field is required');
                  $('.email_error').append('This field is required');
               //  alert(output_string);
             }
             
             else if(output_string=="username_blankemail_blankpassword_blank"){
                 $('.password_error').css("display","block");
                  $('.username_error').css("display","block");
                  $('.email_error').css("display","block");
                  $('.username_error').append('This field is required');
                 $('.password_error').append('This field is required');
                  $('.email_error').append('This field is required');
               //  alert(output_string);
             }
              else{
                 
              //  $('.succesfull_register').append('Click here to activate your account<a href="http://192.168.75.108/prasad_scola/">'+output_string+'</a>');
                 
                //  $('.succesfull_register').append(output_string);
                
                var objJSON = JSON.parse(output_string);
          //  alert(objJSON.username);
           //     alert(objJSON.user_id);
                 $('#user_id').val(objJSON.user_id);
                 $('#new_email_key').val(objJSON.new_email_key);
                 $('.succesfull_register').append("Successfully registered.<span id='account_activate' style='color: #008CC6;text-decoration:underline;cursor:pointer;'>Click here</span> to activate your account");
                $('.succesfull_register').css('display',"block");
             }
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
            //  $(".sub_category_list").append("<option class='select' value='select'>Select</option>");
            //  $(".sub_category_list").append(output_string);
             
            }
            
                     
            });

         });
         
 //-----------------------------------------Activate account-----------------------------------------------
 
 /*jQuery(".succesfull_register").click(function(){
        
        $('.succesfull_register').empty();
        $('.succesfull_register').append('Your account has been activated');
                 $('.succesfull_register').css('display',"block");
   });*/
    
 
         
         
       jQuery(".succesfull_register").click(function(){
       
          
           $('.succesfull_register').empty();
          
        
          var user_id=$("#user_id").val();
         var new_email_key=$("#new_email_key").val();
         
        
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/activate";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'user_id':user_id,'new_email_key':new_email_key},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		   
                  
             if(output_string=="activate_succesfull"){
                 $('.succesfull_register').append('Your account has been activated');
                 $('.succesfull_register').css('display',"block");
               
             }
             else if(output_string=="activate_unsuccesfull"){
                  $('.succesfull_register').append('Activation time expired.Please register again');
                 $('.succesfull_register').css('display',"block");
             }
           
            
            
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
            //  $(".sub_category_list").append("<option class='select' value='select'>Select</option>");
            //  $(".sub_category_list").append(output_string);
             
            }
            
                     
            });

         });
         
         
         
//-----------------------------------------Login ajax------------------------------------------------



    $(".login_submit").click(function () 
        { 
            
           
          var login=$("#login").val();
          var password=$("#pass").val();
          
          
           $('.login_password_error').css("display","none");
        
             $('.login_error').css("display","none");
             
              $('.login_error').text("");
          $('.login_password_error').text("");
          
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/login";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'login':login,'password':password},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		   
                 
             if(output_string=="incorrect_login"){
                 $('.login_error').append('Incorrect email');
                  $('.login_error').css("display","block");
               
             }
             else if(output_string=="incorrect_password"){
               //  alert("in");
                 $('.login_password_error').append('Incorrect password');
                  $('.login_password_error').css("display","block");
                
             }
             
             else if(output_string=="invalid_email"){
                 $('.login_error').append('Invalid email');
                  $('.login_error').css("display","block");
               
             }
            
             
             //---------------------------blank registeration fields----------------
            
             else if(output_string=="password_blank"){
                  $('.login_password_error').css("display","block");
                 $('.login_password_error').append('This field is required');
                
             }
             else if(output_string=="login_blank"){
                  $('.login_error').css("display","block");
                $('.login_error').append('This field is required'); 
              //  alert(output_string);
             }
           
             
             else if(output_string=="login_blankpassword_blank"){
                 $('.login_password_error').css("display","block");
                  $('.login_error').css("display","block");
                 $('.login_password_error').append('This field is required');
                  $('.login_error').append('This field is required');
              //   alert(output_string);
             }
             else{
                 window.location.href = "http://192.168.75.108/prasad_scola/index.php/welcome/scola_teacher";
             }
            
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
            //  $(".sub_category_list").append("<option class='select' value='select'>Select</option>");
            //  $(".sub_category_list").append(output_string);
             
            }
            
                     
            });

         });
         
         
        
         //-----------------------------------------Forget Password ajax------------------------------------------------



    $("#password_submit").click(function () 
        { 
       // alert("hi");
          
          var login=$("#pass_input").val();
         
        $('.password_forget_error').css("display","none");
        
          $('.password_forget_error').empty();
          
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/forgot_password";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'login':login},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		   
                  
             if(output_string=="incorrect_login"){
                 $('.password_forget_error').append('Incorrect email or username');
                  $('.password_forget_error').css("display","block");
               
             }
             
           
            
             //---------------------------blank registeration fields----------------
            
             
             else if(output_string=="email_blank"){
                  $('.password_forget_error').css("display","block");
                $('.password_forget_error').append('This field is required'); 
              //  alert(output_string);
             }
           
               else{
                  var objJSON = JSON.parse(output_string);
          //  alert(objJSON.username);
           //     alert(objJSON.user_id);
                 $('#user_id').val(objJSON.user_id);
                 $('#new_pass_key').val(objJSON.new_pass_key);
              //  $('.succesfull_register').append('Your password key is:<a href="'+output_string+'" > </a>');
                $('.forget_reset').css('display',"block");
                 $('.forget').css('display',"none");
                
             }
            
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
            //  $(".sub_category_list").append("<option class='select' value='select'>Select</option>");
            //  $(".sub_category_list").append(output_string);
             
            }
            
                     
            });

         });
         
    //----------------------------------------password reset----------------------     
         
         $("#new_password_reset").click(function () 
        { 
       
          
          
          
          
           $('.reset_password_error').css("display","none");
        
             $('.new_password_error').css("display","none");
             
              $('.reset_password_error').text("");
          $('.new_password_error').text("");
          
          var user_id=$("#user_id").val();
         var new_pass_key=$("#new_pass_key").val();
         var new_password=$("#new_password").val();
         var confirm_new_password=$("#confirm_new_password").val();
        $('.password_forget_error').css("display","none");
        
          $('.password_forget_error').empty();
          
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/reset_password";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'user_id':user_id,'new_pass_key':new_pass_key,'new_password':new_password,'confirm_new_password':confirm_new_password},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		   
                  
             if(output_string=="reset_password"){
                 $('.reset_password_error').append('Confirm password does not match');
                  $('.reset_password_error').css("display","block");
               
             }
             
           
            
             //---------------------------blank registeration fields----------------
            
             
             else if(output_string=="confirm_new_password_blank"){
                  $('.reset_password_error').css("display","block");
                $('.reset_password_error').append('This field is required'); 
              //  alert(output_string);
             }
             
             else if(output_string=="new_password_blank"){
                  $('.new_password_error').css("display","block");
                $('.new_password_error').append('This field is required'); 
              //  alert(output_string);
             }
             else if(output_string=="new_password_blankconfirm_new_password_blank"){
                  $('.reset_password_error').css("display","block");
                $('.reset_password_error').append('This field is required');
                  $('.new_password_error').css("display","block");
                $('.new_password_error').append('This field is required'); 
              //  alert(output_string);
             }
           
               else{
                 
               $('.succesfull_register').css('display',"block");
                  $('.succesfull_register').append(output_string);
                
             }
            
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
            //  $(".sub_category_list").append("<option class='select' value='select'>Select</option>");
            //  $(".sub_category_list").append(output_string);
             
            }
            
                     
            });

         });
       
      



});
