jQuery(document).ready(function(){
    
    
    

//-------------------------------------------login---------------------------------------    
    jQuery("#login_button").click(function(){
   
    $('.succesfull_register').css("display","none");
    
         $("#email").val("");
          $("#password").val("");
          $("#username").val("");
         
         $('.password_error').css("display","none");
            $('.email_error').css("display","none");
             $('.username_error').css("display","none");
         
              $('.email_error').text("");
          $('.username_error').text("");
          $('.password_error').text("");
           $('.succesfull_register').text("");
   
   
     $('.forget_reset').css('display',"none");
         jQuery("#register_button").addClass("inactive");
         jQuery("#login_button").removeClass("inactive");
         
        jQuery("#register_form").removeClass("active");
      jQuery(".register").removeClass("active");
       
        jQuery("#share_post").removeClass("active");
        jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
         
         jQuery("#share_button a").removeClass("active");
        jQuery("#form_button a").removeClass("active");
        jQuery("#audio_button a").removeClass("active");
        jQuery("#video_button a").removeClass("active");
        jQuery("#calender_button a").removeClass("active");
         jQuery("#photo_button a").removeClass("active");
         jQuery("#forget_password").removeClass("active");
         
         
         jQuery("#share_button a").addClass("inactive");
        jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#video_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#photo_button a").addClass("inactive");
         

       jQuery("#login_form").addClass("active"); 
       jQuery(".login").addClass("active");
    });
//--------------------------register-----------------------------------------------------
    jQuery("#register_button").click(function(){
        
         $('.succesfull_register').css("display","none");
        $("#login").val("");
         $("#pass").val("");
         
           $('.login_password_error').css("display","none");
      $('.login_error').css("display","none");
             
           $('.login_error').text("");
          $('.login_password_error').text("");
          
        
     $('.forget_reset').css('display',"none");
    
     jQuery("#login_button").addClass("inactive");
    jQuery("#register_button").removeClass("inactive");
     jQuery("#forget_password").removeClass("active");
     
        jQuery("#login_form").removeClass("active");
      jQuery(".login").removeClass("active");
       
        jQuery("#share_post").removeClass("active");
        jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");



         jQuery("#share_button a").removeClass("active");
        jQuery("#form_button a").removeClass("active");
        jQuery("#audio_button a").removeClass("active");
        jQuery("#video_button a").removeClass("active");
        jQuery("#calender_button a").removeClass("active");
         jQuery("#photo_button a").removeClass("active");
         
         jQuery("#share_button a").addClass("inactive");
        jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#video_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#photo_button a").addClass("inactive");


       jQuery("#register_form").addClass("active"); 
       jQuery(".register").addClass("active");
    });
    
   //---------------------------------left side buttons general function------------------------------------
   
   jQuery($("ul.pull-left li")).click(function(){
        $('.succesfull_register').css("display","none");
       
      // alert(this.id);
       var do_active_post= $(this).children('a').attr('href');
      
      // alert(do_active_post);
       
       jQuery("#login_form").css("display","none");
         jQuery("#form_post").css("display","none");
        jQuery("#audio_post").css("display","none");
        jQuery("#video_post").css("display","none");
        jQuery("#calender_post").css("display","none");
         jQuery("#photo_post").css("display","none");
       jQuery("#register_form").css("display","none");
       jQuery("#share_post").css("display","none");
       
       jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#photo_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#video_button a").addClass("inactive");
             jQuery("#share_button a").addClass("inactive");
             
             
        
        jQuery(do_active_post).css("display","block"); 
        $(this).children('a').removeClass("inactive");
  
    });
   
/*    jQuery("#share_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").addClass("active");
       
       jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#photo_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#video_button a").addClass("inactive");
             jQuery("#share_button a").removeClass("inactive");
       
    });
    
     jQuery("#audio_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").addClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
       
       jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").removeClass("inactive");
        jQuery("#photo_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#video_button a").addClass("inactive");
       jQuery("#register_form a").addClass("inactive");
       jQuery("#share_button a").addClass("inactive");
    });
    
    
     jQuery("#form_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").addClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
       
       jQuery("#form_button a").removeClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#photo_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#video_button a").addClass("inactive");
       jQuery("#register_form a").addClass("inactive");
       jQuery("#share_button a").addClass("inactive");
    });
    
     jQuery("#video_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").addClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
       
        jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#photo_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#video_button a").removeClass("inactive");
       jQuery("#register_form a").addClass("inactive");
       jQuery("#share_button a").addClass("inactive");
    });
    
     jQuery("#calender_button").click(function(){
     
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").addClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
       
       
         jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#video_button a").addClass("inactive");
        jQuery("#calender_button a").removeClass("inactive");
         jQuery("#photo_button a").addClass("inactive");
       jQuery("#register_form a").addClass("inactive");
       jQuery("#share_button a").addClass("inactive");
    });
    
     jQuery("#photo_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").addClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
       
        
       
         jQuery("#form_button a").addClass("inactive");
        jQuery("#audio_button a").addClass("inactive");
        jQuery("#video_button a").addClass("inactive");
        jQuery("#calender_button a").addClass("inactive");
         jQuery("#photo_button a").removeClass("inactive");
       jQuery("#register_form a").addClass("inactive");
       jQuery("#share_button a").addClass("inactive");
       
    });
    */
    //-----------------------------------------------------------------------------
    
  /*
    
    
     jQuery("#form_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").addClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
    });
    
     jQuery("#video_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").addClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
    });
    
     jQuery("#calender_button").click(function(){
     
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").addClass("active");
         jQuery("#photo_post").removeClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
    });
    
     jQuery("#photo_button").click(function(){
    
        
        jQuery("#login_form").removeClass("active");
         jQuery("#form_post").removeClass("active");
        jQuery("#audio_post").removeClass("active");
        jQuery("#video_post").removeClass("active");
        jQuery("#calender_post").removeClass("active");
         jQuery("#photo_post").addClass("active");
       jQuery("#register_form").removeClass("active");
       jQuery("#share_post").removeClass("active");
    });
    */
    
    jQuery(".scola_anchor").click(function(){
    
         $('.succesfull_register').css("display","none");
        jQuery(".login").removeClass("active");
      
         jQuery(".forget").addClass("active");
        
         
  jQuery(".login_info").addClass("active");
      
     
    });
    
    
   
    
});
