
jQuery(document).ready(function(){
 //-----------------------------------------------plupload----------------------------------------

  /* 
    var baseurl = $('#baseurl').val();
    alert(baseurl);
    var i = 0;
    $('.uploadFiles').click(function(){
        alert("this is a test");
       $('#uplaodBox').dialog('open');
        return false
    })
    $('#uplaodBox').dialog({
        
        autoOpen : false,
        modal    : true,
        buttons : {
            'Close' : function(){
                $(this).dialog('close')
            }
        },
        width : 1000,
        height : 500
    })
    
    function log() {
		var str = "";

		plupload.each(arguments, function(arg) {
			var row = "";

			if (typeof(arg) != "string") {
				plupload.each(arg, function(value, key) {
					// Convert items in File objects to human readable form
					if (arg instanceof plupload.File) {
						// Convert status to human readable
						switch (value) {
							case plupload.QUEUED:
								value = 'QUEUED';
								break;

							case plupload.UPLOADING:
								value = 'UPLOADING';
								break;

							case plupload.FAILED:
								value = 'FAILED';
								break;

							case plupload.DONE:
								value = 'DONE';
								break;
						}
					}

					if (typeof(value) != "function") {
						row += (row ? ', ': '') + key + '=' + value;
					}
				});

				str += row + " ";
			} else { 
				str += arg + " ";
			}
		});

		$('#log').val($('#log').val() + str + "\r\n");
	}

	$("#uploader").pluploadQueue({
		// General settings
                 
		runtimes: 'gears,browserplus,silverlight,flash,html4',
		url: baseurl + 'index.php/welcome/uploadtoserver',
		max_file_size: '100mb',
		chunk_size: '1mb',
		unique_names: true,

		// Resize images on clientside if we can
		resize: {width: 320, height: 240, quality: 90},

		// Specify what files to browse for
		filters: [
			{title: "Image files", extensions: "jpg,gif,png"},
			{title: "Zip files", extensions: "zip"},
                        {title : "Media Files", extensions : 'flv,mp4'}
		],

		// Flash/Silverlight paths
		flash_swf_url:baseurl +  'js/plupload/plupload.flash.swf',
		silverlight_xap_url:baseurl + 'js/plupload/plupload.silverlight.xap',

		// PreInit events, bound before any internal events
		preinit: {
                  
			Init: function(up, info) {
				log('[Init]', 'Info:', info, 'Features:', up.features);
			},

			UploadFile: function(up, file) {
				log('[UploadFile]', file);

				// You can override settings before the file is uploaded
				// up.settings.url = 'upload.php?id=' + file.id;
				// up.settings.multipart_params = {param1: 'value1', param2: 'value2'};
			}
		},

		// Post init events, bound after the internal events
		init: {
			Refresh: function(up) {
				// Called when upload shim is moved
				log('[Refresh]');
			},

			StateChanged: function(up) {
				// Called when the state of the queue is changed
				log('[StateChanged]', up.state == plupload.STARTED ? "STARTED": "STOPPED");
			},

			QueueChanged: function(up) {
				// Called when the files in queue are changed by adding/removing files
				log('[QueueChanged]');
			},

			UploadProgress: function(up, file) {
				// Called while a file is being uploaded
				log('[UploadProgress]', 'File:', file, "Total:", up.total);
			},

			FilesAdded: function(up, files) {
				// Callced when files are added to queue
				log('[FilesAdded]');

				plupload.each(files, function(file) {
					log('  File:', file);
				});
			},

			FilesRemoved: function(up, files) {
				// Called when files where removed from queue
				log('[FilesRemoved]');

				plupload.each(files, function(file) {
					log('  File:', file);
				});
			},

			FileUploaded: function(up, file, info) {
				// Called when a file has finished uploading
				log('[FileUploaded] File:', file, "Info:", info);
                                // i must display image
                                var files = $('<p><a target="_blank" href="'+baseurl + '/uploads/'+file.target_name+'">Files '+i+'</a>size : '+file.size+'</p>')
                                $(files).hide().insertAfter('#insertAfterme').slideDown('slow');
                                i++
			},

			ChunkUploaded: function(up, file, info) {
				// Called when a file chunk has finished uploading
				log('[ChunkUploaded] File:', file, "Info:", info);
			},

			Error: function(up, args) {
				// Called when a error has occured

				// Handle file specific error and general error
				if (args.file) {
					log('[error]', args, "File:", args.file);
				} else {
					log('[error]', args);
				}
			}
		}
	});

	$('#log').val('');
	$('#clear').click(function(e) {
		e.preventDefault();
		$("#uploader").pluploadQueue().splice();
	});
    */
 //-------------------------------------------date picker------------------------------------   
$('input.datepicker').Zebra_DatePicker({
    direction:true,
    inside:true,
    show_icon:false,
    
});
 
//---------------------------------------------Banner change----------------------------------------

      $(".banner").mouseover(function(){
         
         $(".baner_change").css("display","block"); 
      });
      
    

      $(".banner").mouseout(function(){
         $(".baner_change").css("display","none"); 
      });
      
       $(".baner_change").mouseenter(function(){
          
         $(".baner_change").css("display","block"); 
         
 //---------------------------------------------Profile pic change----------------------------------------
        
 
      $(".profile_image").mouseover(function(){
         $(".profile_image_change").css("display","block"); 
      });
      
    

      $(".profile_image").mouseout(function(){
         $(".profile_image_change").css("display","none"); 
      });
      
      $(".profile_image_change").mouseenter(function(){
         $(".profile_image_change").css("display","block"); 
      });
      
      
       
         
      });
      
    //--------------------------------------Upload profile image-------------------------------------------
    
    
    
    
    $('#form').submit(function() {
      //  e.preventDefault();
      alert("in1");
           $.ajaxFileUpload({
           url:'http://localhost/prasad_scola/index.php/welcome/upload',
            secureuri:false,
           // fileElementId:'image',
            dataType: 'json',
            data    : {
               // 'title' : "default.png"
            },
            success: function (data, status){

                if( data.error != '' ){

                  alert(data.error);

                }else{

                    alert(data.msg);
                    // Refresh image list

                }

            },
            error: function (data, status, e){

                alert(e);

            }
        });
        
       /*
          //var userfile=$("#userfile").val();
           var userfile=$("#profile_form").val();
          
         
          // alert(userfile);
           alert($("#profile_form").serialize());
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/do_upload";
	
          
		
          $.ajax({
            crossDomain: true,
            type: "POST",
            async: false,
            data: $("#profile_form").serialize(),
            url:temp,
          dataType: 'json',
            success: function(output_string) {
		alert(output_string);
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
            //  $(".sub_category_list").append("<option class='select' value='select'>Select</option>");
            //  $(".sub_category_list").append(output_string);
             
            }
            
                     
            });*/

         });
  
  
  $('#form').submit(function(e) {

        e.preventDefault();

        $.ajaxFileUpload({
            url:'/image/upload',
            secureuri:false,
            fileElementId:'image',
            dataType: 'json',
            data    : {
                'title' : $('#title').val()
            },
            success: function (data, status){

                if( data.error != '' ){

                   console.log(data.error);

                }else{

                    console.log(data.msg);
                    // Refresh image list

                }

            },
            error: function (data, status, e){

                console.log(e);

            }
        });
    });
  
  //------------------------------------------personal information ajax ----------------------------
  
  
  $("#teacher_works_id").blur(function(){
      
      var teacher_works=$("#teacher_works_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_works";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_works':teacher_works},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
                $("#teacher_works_id").val(output_string);
              // alert(output_string);
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
     //-----------------------------------teacher name header-----------------------------------------
     
     
     
     
     
     $("#teacher_name_header").blur(function(){
      
      var teacher_name=$("#teacher_name_header").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_name";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_name':teacher_name},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
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
     
//-----------------------------------teacher  studied-----------------------------------------
     
     
     
     
     
     $("#teacher_studied_id").blur(function(){
      
      var teacher_studied=$("#teacher_studied_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_studied";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_studied':teacher_studied},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
     
     //-----------------------------------teacher subject-----------------------------------------
     
     
     
     
     
     $("#teacher_subject_id").blur(function(){
      
      var teacher_subject=$("#teacher_subject_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_subject";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_subject':teacher_subject},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
     
     //-----------------------------------teacher district-----------------------------------------
     
     
     
     
     
     $("#teacher_district_id").blur(function(){
      
      var teacher_district=$("#teacher_district_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_district";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_district':teacher_district},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
  
   //-----------------------------------teacher description -----------------------------------------
     
     
     
     
     
     $("#user_description_id").blur(function(){
      
      var teacher_about=$("#user_description_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_about";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'about':teacher_about},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
  
  
    //-----------------------------------teacher phone-----------------------------------------
      $("#teacher_phone_id").blur(function(){
      
      var teacher_phone=$("#teacher_phone_id").val();
        
         alert(teacher_phone);
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_phone";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_phone':teacher_phone},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
  

     //-----------------------------------teacher website-----------------------------------------
     
     
     
     
     
     $("#teacher_website_id").blur(function(){
      
      var teacher_website=$("#teacher_website_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_website";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_website':teacher_website},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
   
   
   
    //-----------------------------------teacher facebook-----------------------------------------
     
     
     
     
     
     $("#teacher_facebook_id").blur(function(){
      
      var teacher_facebook=$("#teacher_facebook_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_facebook";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_facebook':teacher_facebook},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
   

     
      //-----------------------------------teacher twitter-----------------------------------------
     
     
     
     
     
     $("#teacher_twitter_id").blur(function(){
      
      var teacher_twitter=$("#teacher_twitter_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_twitter";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_twitter':teacher_twitter},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
      
      
      
        //-----------------------------------teacher youtube-----------------------------------------
     
     
     
     
     
     $("#teacher_youtube_id").blur(function(){
      
      var teacher_youtube=$("#teacher_youtube_id").val();
        
         
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_teacher_youtube";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_youtube':teacher_youtube},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
               alert(output_string);
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
      
      
    //----------------------------------------back to post-------------------------------
    
      
     jQuery(".back_button").click(function(){
        $(".manage_settings_tab").css("display","none");
        $(".manage_settings_tab").addClass("active");
        
    }); 
 
 //----------------------------------------post to manage settings-------------------------------
 
     jQuery(".back_button").click(function(){
        $(".manage_settings_tab").css("display","none");
        $(".posts_tab").css("display","block");
        
    }); 
    
    
     jQuery(".settings_button").click(function(){
        $(".posts_tab").css("display","none");
        $(".manage_settings_tab").css("display","block");
        
    }); 
    
    
    jQuery(".personal_info").click(function(){
         $("#email_settings").css("display","none");
        $("#change_password").css("display","none");
        $(".personal").css("display","block");
        
    }); 
    
    jQuery(".personal_security").click(function(){
         $("#email_settings").css("display","none");
        $("#change_password").css("display","block");
        $(".personal").css("display","none");
        
    }); 
    
     jQuery(".personal_email").click(function(){
         $("#email_settings").css("display","block");
        $("#change_password").css("display","none");
        $(".personal").css("display","none");
        
    }); 
    
    jQuery(".personal_group").click(function(){
         $("#email_settings").css("display","none");
        $("#change_password").css("display","none");
        $(".personal").css("display","none");
        
    }); 
    
  //-------------------------------------teacher email change---------------------------------------------
  
  
  $(".email_done").click(function () 
        { 
        
          
          var email=$("#new_email").val();
          var re_email=$("#re_email").val();
          var password=$("#password").val();
          
           $('.password_error').css("display","none");
            $('.email_error').css("display","none");
             $('.username_error').css("display","none");
             
              $('.username_error').text("");
          $('.email_error').text("");
          $('.password_error').text("");
           $('.succesfull_register').text("");
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/change_email";
	
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'email':email,'password':password,'re_email':re_email},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		//   alert(output_string);
                   
             
               if(output_string=="invalid_email"){
                 $('.email_error').append('Invalid email');
                  $('.email_error').css("display","block");
               
                }
               else if(output_string=="invalid_re_email"){
                 $('.username_error').append('Invalid email');
                  $('.username_error').css("display","block");
               
                } 
                
                else if(output_string=="invalid_both_email"){
                     $('.email_error').append('Invalid email');
                  $('.email_error').css("display","block");
                  
                   $('.username_error').append('Invalid email');
                  $('.username_error').css("display","block");
                }
             
             else if(output_string=="incorrect_password"){
                     $('.password_error').append('Incorrect password');
                  $('.password_error').css("display","block");
                  
                }
             else if(output_string=="succesfull_register"){
                $('.succesfull_register').append('You have successfully registered.');
                 $('.succesfull_register').css('display',"block");
                
             }
             
             //---------------------------blank registeration fields----------------
             else if(output_string=="re_email_blank"){
                 $('.re_email_error').append('This field is required');
                  $('.re_email_error').css("display","block");
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
             else if(output_string=="re_email_blankpassword_blank"){
                 $('.password_error').css("display","block");
                  $('.re_email_error').css("display","block");
                 $('.re_email_error').append('This field is required');
                  $('.password_error').append('This field is required');
                // alert(output_string);
             }
             else if(output_string=="re_email_blankemail_blank"){
                 
                  $('.re_email_error').css("display","block");
                  $('.email_error').css("display","block");
                 $('.re_email_error').append('This field is required');
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
             
             else if(output_string=="re_email_blankemail_blankpassword_blank"){
                 $('.password_error').css("display","block");
                  $('.re_email_error').css("display","block");
                  $('.email_error').css("display","block");
                  $('.re_email_error').append('This field is required');
                 $('.password_error').append('This field is required');
                  $('.email_error').append('This field is required');
               //  alert(output_string);
             }
              else{
                 
                $('.succesfull_register').append('Email successfully changed');
                 
                 alert(output_string);
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
 ////////-----------------------------------password change----------------------------------------------
 
 
 
 
 
 
 $(".change_password_button").click(function () 
        { 
            var old_password=$("#old_password").val();
          var new_password=$("#new_password").val();
          var confirm_new_password=$("#confirm_new_password").val();
          
           $('.old_password_error').css("display","none");
            $('.new_password_error').css("display","none");
             $('.confirm_new_password_error').css("display","none");
             
              $('.old_password_error').text("");
          $('.new_password_error').text("");
          $('.confirm_new_password_error').text("");
           $('.succesfull_register').text("");
          
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/auth/change_password";
	
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'old_password':old_password,'new_password':new_password,'confirm_new_password':confirm_new_password},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		  // alert(output_string);
                   
             
               if(output_string=="incorrect_password"){
                 $('.old_password_error').append('Incorrect password');
                  $('.old_password_error').css("display","block");
               
                }
               
             else if(output_string=="password_not_match"){
                     $('.confirm_new_password_error').append('Confirm password doesnot match');
                  $('.confirm_new_password_error').css("display","block");
                  
                }
             else if(output_string=="succesfull_register"){
              //  $('.succesfull_register').append('You have successfully registered.');
                 $('.succesfull_register').css('display',"block");
                
             }
             
             //---------------------------blank registeration fields----------------
             else if(output_string=="old_password_blank"){
                 $('.old_password_error').append('This field is required');
                  $('.old_password_error').css("display","block");
             //    alert("username");
                
             }
             else if(output_string=="new_password_blank"){
                  $('.new_password_error').css("display","block");
                 $('.new_password_error').append('This field is required');
                
             }
             else if(output_string=="confirm_new_password_blank"){
                  $('.confirm_new_password_error').css("display","block");
                $('.confirm_new_password_error').append('This field is required'); 
              //  alert(output_string);
             }
             else if(output_string=="old_password_blanknew_password_blank"){
                  $('.old_password_error').append('This field is required');
                  $('.old_password_error').css("display","block");
                 $('.new_password_error').css("display","block");
                 $('.new_password_error').append('This field is required');
                
                // alert(output_string);
             }
             else if(output_string=="old_password_blankconfirm_new_password_blank"){
                 
                  $('.old_password_error').append('This field is required');
                  $('.old_password_error').css("display","block");
                 $('.confirm_new_password_error').css("display","block");
                $('.confirm_new_password_error').append('This field is required'); 
               //  alert(output_string);
             }
             else if(output_string=="new_password_blankconfirm_new_password_blank"){
                 $('.new_password_error').css("display","block");
                 $('.new_password_error').append('This field is required');
                 $('.confirm_new_password_error').css("display","block");
                $('.confirm_new_password_error').append('This field is required');
                 //alert(output_string);
             }
             
             else if(output_string=="old_password_blanknew_password_blankconfirm_new_password_blank"){
                 $('.new_password_error').css("display","block");
                 $('.new_password_error').append('This field is required');
                 $('.confirm_new_password_error').css("display","block");
                $('.confirm_new_password_error').append('This field is required');
                $('.old_password_error').append('This field is required');
                  $('.old_password_error').css("display","block");
                
               //  alert(output_string);
             }
              else{
                 
               // $('.succesfull_register').append('Email successfully changed');
                // $('.succesfull_register').css('display',"block");
                 
               //  alert(output_string);
             }
            // alert(output_string);
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
            return false;
         });
         
         
 //-----------------------------------------------personal info change---------------------------------
 
 
 
 
  $(".save_settings").click(function(){
      
      var teacher_name=$("#teacher_name").val();
        var teacher_email=$("#teacher_email").val();
        var teacher_about=$("#teacher_about").val(); 
         var teacher_works=$("#teacher_works").val(); 
       var teacher_university=$("#teacher_university").val();
       var teacher_subject=$("#teacher_subject").val(); 
       var teacher_district=$("#teacher_district").val();
       
       
       
          var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/update_personal_info";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'teacher_name':teacher_name,'teacher_email':teacher_email,'teacher_about':teacher_about,'teacher_works':teacher_works,'teacher_university':teacher_name,'teacher_subject':teacher_subject,'teacher_district':teacher_district,},
            url:temp,
          //  dataType: 'jsonp',
            success: function(output_string) {
		
               // $("#teacher_name_header").val(output_string);
              
             //----------------------------------------------------
          
             
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                     
            });
            
     });  
     
     
     
  //---------------------------------------tiny editor--------------------------------------------
   $("#info_post_button_id").click(function(){
  
            editor.post();    
                
             var post_title = $("#info_post_title").val();
             var x =$("#tinyeditor").val();
      var a = $('#userphoto').val();
        alert(a);
                  
     
           var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/create_info_post";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'post_title':post_title,'editor':x,},
            url:temp,
            dataType: 'json',
            success: function(output_string) {
                alert(output_string);
                 
                var post_id=output_string;
                alert(post_id);
	//------------------------file upload----------------
        
        if($('#userfile').val()!=""){
            

                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_file",
                   secureuri      :false,
                   fileElementId  :'userfile',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"info"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });
                
           }      
             //------------------------photo upload----------------
        
        if($('#userphoto').val()!=""){
            

                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_photo",
                   secureuri      :false,
                   fileElementId  :'userphoto',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"info"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });   
                
                
                
                
                
        }        
      
       
       //-------------------------------------      
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                   
            });
            
     });  
     
  //-----------------------------------------------create event post-----------------------------------
  
  
  
  
  
  $("#event_post_button_id").click(function(){
  
            editor_event.post();    
              
              var event_d = $("#event_post_date").val();
              alert(event_d);
              
             var post_title = $("#event_post_title").val();
             var x =$("#tinyeditor_event").val();
             var f = $('#userfile_event').val();
             var a = $('#userphoto_event').val();
              
              alert(post_title);
              alert(x);
                 
                 alert(f);
                  alert(a);
                 
                  
     
           var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/create_event_post";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'post_title':post_title,'editor':x,'event_date':event_d},
            url:temp,
            dataType: 'json',
            success: function(output_string) {
               
                 
                var post_id=output_string;
                alert(post_id);
	//------------------------file upload----------------
        
        if($('#userfile_event').val()!=""){
                    alert("here");
                    alert($('#userfile_event').val());
                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_file",
                   secureuri      :false,
                   fileElementId  :'userfile_event',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"event"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });
                
           }      
             //------------------------photo upload----------------
        
        if($('#userphoto_event').val()!=""){
            
                    alert($('#userphoto_event').val());
                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_photo",
                   secureuri      :false,
                   fileElementId  :'userphoto_event',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"event"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });   
                
                
                
                
                
        }        
      
       
       //-------------------------------------      
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                   
            });
            
     });  
   
 
 
 
 
 //-----------------------------------------------create audio post-----------------------------------
  
  
  
  
  
  $("#audio_post_button_id").click(function(){
  
            editor_audio.post();    
              
              
              
             var post_title = $("#audio_post_title").val();
             var x =$("#tinyeditor_audio").val();
             var f = $('#userfile_audio').val();
             var a = $('#userphoto_audio').val();
              
              alert(post_title);
              alert(x);
                 
                 alert(f);
                  alert(a);
                 
                  
     
           var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/create_audio_post";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'post_title':post_title,'editor':x},
            url:temp,
            dataType: 'json',
            success: function(output_string) {
               
                 
                var post_id=output_string;
                alert(post_id);
	//------------------------audio upload----------------
        
        if($('#userfile_audio').val()!=""){
                    alert("here");
                    alert($('#userfile_audio').val());
                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_audio",
                   secureuri      :false,
                   fileElementId  :'userfile_audio',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"audio"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });
                
           }      
             //------------------------photo upload----------------
        
        if($('#userphoto_audio').val()!=""){
            
                    alert($('#userphoto_audio').val());
                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_photo",
                   secureuri      :false,
                   fileElementId  :'userphoto_audio',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"audio"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });   
                
                
                
                
                
        }        
      
       
       //-------------------------------------      
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                   
            });
            
     });  
 
 //-----------------------------------------------create video post-----------------------------------
  
  
  
  
  
  $("#video_post_button_id").click(function(){
  
            editor_video.post();    
              
              
              
             var post_title = $("#video_post_title").val();
             var x =$("#tinyeditor_video").val();
             var f = $('#video_url').val();
             var a = $('#userphoto_video').val();
              
              alert(post_title);
              alert(x);
                 
                 alert(f);
                  alert(a);
                 
                  
     
           var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/create_video_post";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'post_title':post_title,'editor':x},
            url:temp,
            dataType: 'json',
            success: function(output_string) {
               
                 
                var post_id=output_string;
                alert(post_id);
	//------------------------audio upload----------------
        
        if($('#video_url').val()!=""){
                   
                    var video_link= $('#video_url').val();
                    alert(video_link);
                    $.ajax({
                  // url         :$('#upload_file' ).attr('action'),
                   crossDomain: true,
                   async: false,
                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_video",
                   secureuri      :false,
                   
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"video","video_link":video_link},
                 
                   success  : function (output_string)
                   {
                      
                      alert(output_string);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });
                
           }      
             //------------------------photo upload----------------
        
        if($('#userphoto_video').val()!=""){
            
                    alert($('#userphoto_video').val());
                    $.ajaxFileUpload({
                  // url         :$('#upload_file' ).attr('action'),

                   type: "POST",
                  url : "http://192.168.75.108/prasad_scola/index.php/welcome/upload_photo",
                   secureuri      :false,
                   fileElementId  :'userphoto_video',
                   dataType    : 'json',
                 data        : {'post_id':post_id,'post_type':"video"},
                   success  : function (data, status)
                   {
                      if(data.status != 'error')
                      {
                         $('#files').html('<p>Reloading files...</p>');
                         refresh_files();
                         $('#title').val('');
                      }
                      alert(data.msg);
                   },
                       error: function( jqXHR,textStatus,errorThrown) {
                          alert("error in ajax");           	
                        alert(jqXHR.toString());
                         alert(textStatus);
                          alert(errorThrown);

                      }
                });   
                
                
                
                
                
        }        
      
       
       //-------------------------------------      
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                   
            });
            
     });  
      
      
    //---------------------------------------create form post--------------------------------------------  
      
      
      
      
      $("#form_post_button_id").click(function(){
  
            editor_form.post();    
              
              
              
             var post_title = $("#form_post_title").val();
             var x =$("#tinyeditor_form").val();
             
              alert(post_title);
              alert(x);
                 
               
                 
                  
     
           var temp = "http://192.168.75.108/prasad_scola/index.php/welcome/create_form_post";
	
          
		
          $.ajax({
              crossDomain: true,
            type: "POST",
            async: false,
            data:{'post_title':post_title,'editor':x},
            url:temp,
            dataType: 'json',
            success: function(output_string) {
               
                 
                var post_id=output_string;
                alert(post_id);
                
       //-------------------------------------      
            },
             error: function( jqXHR,textStatus,errorThrown) {
		alert("error in ajax");           	
              alert(jqXHR.toString());
               alert(textStatus);
                alert(errorThrown);
           
            }
            
                   
            });
            
     });  
   
 
 
 
      
    
    
});
