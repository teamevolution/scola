<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Home|Scola</title>
        <link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>/css/header.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>/css/style.css" rel="stylesheet"> 
        
       <script type="text/javascript" src="<?php echo base_url();?>js/jQuery_lib.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>js/scola_style.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
          
     <!--         <script type="text/javascript" src="<?php echo base_url();?>js/jQuery_library.js"></script>-->
            <script type="text/javascript" src="<?php echo base_url();?>js/scola_ajax.js"></script>
        
    </head>
    
    
    <body >
       <div class="container container_change">
        <header >

            <div class="banner">
                <img src="<?php echo base_url();?>/images/shapeimage_1.png" alt="startpage_banner" >

            </div>
            <section class="scola_description">
                <div class="left_scola_description pull-left">
                   
                  
                        <div class="profile_image  pull-left">
                            <img class="profile_image_content" src="<?php echo base_url();?>/images/shapeimage_2.png" alt="profile image"/>
                        </div>
                        <h1 class="scola_logo" >
                            <img src="<?php echo base_url();?>images/scola_blue1.png" alt="profile image"/>
                         </h1>
                   
                    <p class="description_text clearfix">
                       Welcome to Scola! 
                       Use Scola to post text, photos, videos, and audio so your students can explore additional content that supplements their course work. Post important dates, reminders and permission forms so parents and students can check in anytime and stay informed.
                    </p>
                </div>
                
                <div class="right_scola_description pull-right">
                    <div class="right_info_rows clearfix">
                        <div class="right_info_rows_icons pull-right">
                        <img class="pull-right" src="<?php echo base_url();?>images/job-icon_normal-filtered.png" alt="works"/>
                        <label class="pull-right">Works</label>
                        </div>
                        <label class="pull-right edit_label">Your School</label>
                        
                     </div>
                    
                     <div class="right_info_rows clearfix">
                       
                        <div class="right_info_rows_icons pull-right">
                            <img  class="pull-right"src="<?php echo base_url();?>images/21692185@N00-filtered.jpg" alt="studied"/>
                            <label class="pull-right">Studied</label>
                        </div>
                        <label class="pull-right edit_label">Your University</label>
                     </div>
                    
                     <div class="right_info_rows clearfix ">
                         <div class="right_info_rows_icons  pull-right">
                          <img  class="pull-right"src="<?php echo base_url();?>images/home-filtered.png" alt="subject"/>
                          <label class="pull-right">Subject</label>
                          </div>
                           <label class="pull-right edit_label">Your Grade</label>
                     </div>
                    
                     <div class="right_info_rows clearfix">
                        <div class="right_info_rows_icons  pull-right">
                         <img  class="pull-right" src="<?php echo base_url();?>images/social_network-filtered.png" alt="district"/>
                         <label class="pull-right">District</label>
                       </div>
                         <label class="pull-right edit_label">Your Home on the Web</label>
                     </div>
                    
                 </div>
            </section>
            
            
            
        </header>
           
         <section class="succesfull_register"></section>
         <section class="succesfull_password_change"></section>
         
         <section class="post_part pull-left">
             <div class="left_post_part pull-left">
                 <div class="post_icons_container pull-left">
                     <strong class="pull-left">Explore Scola</strong>
                    <ul class="pull-left">
                         <li id="share_button">
                             <a href="#share_post" title="" class="active">
                                 <img src="<?php echo base_url();?>images/Share Icon in a box.png" alt="information post"/>
                              </a>
                         </li>
                         
                         <li id="calender_button" class="try">
                             <a href="#calender_post" id="calender" title="" class="inactive">
                                 <img src="<?php echo base_url();?>images/Calendar in Box.png" alt="calender post"/>
                              </a>
                         </li>
                         
                         <li id="photo_button">
                             <a href="#photo_post" title="" class="inactive">
                                 <img src="<?php echo base_url();?>images/Camera Icon in a Box.png" alt="photo post"/>
                              </a>
                         </li>
                         
                         <li id="video_button">
                             <a href="#video_post" title="" class="inactive">
                                 <img src="<?php echo base_url();?>images/Video Icon In Box.png" alt="video post"/>
                              </a>
                         </li>
                         
                         <li id="form_button">
                             <a href="#form_post" title="" class="inactive">
                                 <img src="<?php echo base_url();?>images/Form in a box Vector.png" alt="form post"/>
                              </a>
                         </li>
                         
                         <li id="audio_button">
                             <a href="#audio_post" title="" class="inactive">
                                 <img src="<?php echo base_url();?>images/audio icon in box.png" alt="audio post"/>
                              </a>
                         </li>
                     </ul>
                 </div>
                 <!-----------------------------------share post info---------------------------->  
                 <div class="share_post_info left_post_part_paragraph clearfix active" id="share_post">
                     
                     
                     <div class="paragraph_header clearfix ">
                         <img class="pull-left" src="<?php echo base_url();?>images/Share Icon in a box.png" alt="information content"/>
                         <div class="pull-left">
                         <h3>Check this out class!</h3>
                         <p>April 20, 2012 to Grade 5 Science</p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                             With an informative share post you can give an update to your students and parents, share an interesting tidbit of information, share links, attach files, embed a photo, and start collaborative online discussions using your new website! 
                         </p>
                         
                         <p>
                             Scola is completely free and you can register in one minute with your School District email.
                         </p>
                      </div>
                      
                  </div>
              <!-----------------------------------calender info---------------------------->        
                 
                 <div class="calender_info left_post_part_paragraph clearfix" id="calender_post">
                   
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/date.png" alt="information content"/>
                         <div class="pull-left">
                        <h3>Mark Your Calendar Field Trip to the Discovery Centre!</h3>
                        <p>September 1, 2012 to Grade 10 Science</p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                            Use event posts to notify your students and parents about upcoming field trips, events, assignments, and other important dates.  Users can filter your posts by type and see all of your upcoming events in one feed in chronlogical order.
                          
                         </p>
                         
                         <p>
                            
                              You can attach a photo or a file to an event to make sure that everyone has what they need to be prepared for the big day.
                          
                         </p>
                      </div>
                  </div>
                 
                 
             
              
              <!-----------------------------------login info---------------------------->        
                 
                 <div class=" left_post_part_paragraph clearfix login_info common_post"   id="login_form">
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/Login Icon in Box.png" alt="information content"/>
                         <div class="pull-left">
                         <h3>Welcome back, it is great to see you!</h3>
                         <p><p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                            
                              The best way to keep your students engaged is a steady flow of compelling content that supplements your curriculum and inspires their imagination.  The internet is a fantastic tool for students and your curated collection of engaging content will shine a new light on the concepts they are tackling everyday at school.  We love having you back!
                          </p>
                      </div>
                  </div>
                 
                 
              
              
              <!-----------------------------------register info---------------------------->        
                 
                 <div class="register_info left_post_part_paragraph clearfix common_post"  id="register_form">
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/Register in Box.png" alt="information content"/>
                         <div class="pull-left">
                         <h3>Welcome to Scola, we are so happy to see you!</h3>
                         <p><p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                            
                            
                              The best way to keep your students engaged is a steady flow of compelling content that supplements your curriculum and inspires their imagination.  The internet is a fantastic tool for students and your curated collection of engaging content will shine a new light on the concepts they are tackling everyday at school.  Come in and get started!
                          
                          
                         </p>
                      </div>
                  </div>
                 
                 
            
              <!-----------------------------------photo info---------------------------->        
                 
                 <div class="photo_info left_post_part_paragraph clearfix common_post" id="photo_post">
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/Camera Icon in a Box.png" alt="information content"/>
                         <div class="pull-left">
                        <h3>Have you seen the photos from Play Day? What a success!</h3>
                         <p>May 12, 2012 to Parent Group</p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                           
                              Use photo posts to make beautiful fullscreen galleries of your favourite photo albums. Your post will show a selection of thumbnails pre-cropped based on the dimensions of your photos and with one click your visitors will see a fullscreen high resolution carosel of your images.
                          
                         </p>
                         
                         <p>
                            
                              Images could be of your class events or of supplemental material to complement your in class lessons. Share your inspiration, the sky is the limit!
                          
                         </p>
                      </div>
                     <div class="photo_gallery">
                      </div>
                     
                  </div>
                 
                 
             
              
              <!-----------------------------------video info---------------------------->        
                 
                 <div class="video_info left_post_part_paragraph clearfix common_post" id="video_post">
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/Video Icon In Box.png" alt="information content"/>
                         <div class="pull-left">
                         <h3>Did you like today’s lesson on the solar system? You will love this!</h3>
                         <p>April 20, 2012 to Astronomy 101</p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                           <iframe></iframe>
                         </p>
                         
                         <p>
                           
                              Video posts let you seemlessly share video from the world’s most popular video hosting sites. There is a wealth of invaluable video footage available for free on the internet, become a curator and share the cream of the crop with your students.
                          
                         </p>
                      </div>
                  </div>
                 
                 
              
              
              <!-----------------------------------form info---------------------------->        
                 
                 <div class="form_info left_post_part_paragraph clearfix common_post" id="form_post">
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/Form in a box Vector.png" alt="information content"/>
                         <div class="pull-left">
                        <h3>Solicit a response, anything from a permission form to a quiz</h3>
                        <p>April 20, 2012 to Everyone</p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                            
                              Opening up simple two way communication on your website is essential. With forms on Scola you can make a custom made form in seconds. Choose the name, email, and consent fields for a permission form, or choose name and paragraph response to get online reflections from your students.  Multiple choice and single line responses are a breeze. Never has it been so easy.  Once you close the form all of the responses go to your email for safe keeping
                          
                         </p>
                         
                         <div class="form_plugin">
                          </div>
                      </div>
                  </div>
                 
                 
             
              
              <!-----------------------------------audio info---------------------------->        
                 
                 <div class="audio_info left_post_part_paragraph clearfix common_post" id="audio_post">
                     <div class="paragraph_header clearfix">
                         <img class="pull-left" src="<?php echo base_url();?>images/audio icon in box.png" alt="information content"/>
                         <div class="pull-left">
                         <h3>Our dress rehearsal audio is ready. Let’s review before the show.</h3>
                      <p>April 20, 2012 to Grade 12 Music</p>
                         </div>
                      </div>
                     <div class="paragraph_header_text clearfix">
                         <p>
                            
                              Sharing audio has never been this easy.  Upload audio files you recorded yourself from your computer, recording device, or cellphone in a flash, or even insert a link to a youtube video and we will seperate the audio out for you, it is that simple!
                          
                         </p>
                         
                         <p>
                            
                              Your posts will load with a beautiful player that works on all browsers and mobile devices.
                          
                         </p>
                         
                         <div class="jquery_jplayer_1">
                         </div>
                         
                      </div>
                  </div>
                 
                 
              </div>
<!------------------------------------------------------------------------------------------------->             
             <div class="right_post_part pull-right">
                 <div class="login_icons_container post_icons_container ">
             
                    <ul class="pull-left">
                         <li id="login_button" class="inactive">
                             <a href="#login_form" title="">
                                 <strong class="">Login</strong>
                                 <img  src="<?php echo base_url();?>images/Login Icon in Box.png" alt="information post"/>
                              </a>
                         </li>
                         
                         <li id="register_button" class="">
                             <a href="#register_form" title="">
                                 <strong class="">Register</strong >
                                 <img src="<?php echo base_url();?>images/Register in Box.png" alt="calender post"/>
                              </a>
                         </li>
                         
                         
                    </ul>
                 
              </div >
                 
               <div class="register clearfix active" id="register_form">
                   
                   <strong>Register</strong>
                   
                   <form action="" method="post" class="register_form" onsubmit="return false">
                       
                       <input class="form_input" type="text" name="email" value="" id="email" placeholder="District Email Address" value=<?php echo set_value('email'); ?>/>
                            <label class="email_error"> </label>
                       <input class="form_input" type="password" name="password" value="" id="password" placeholder="Password"  value=<?php echo set_value('password'); ?>/>
                             <label class="password_error"> </label>  
                       <input class="form_input" type="text" name="username" value="" id="username" placeholder="Username/URL"  value=<?php echo set_value('username'); ?>/>
                               <label class="username_error"> </label>  
                       <input class="form_input" type="hidden" name="new_email_key" value="" id="new_email_key"/> 
                       <input class="form_input" type="hidden" name="user_id" value="" id="user_id"/> 
                       <div class=" pull-right register_submit register_sub">
                          <input type="submit" value="Register"/>
                    
                           <img src="<?php echo base_url();?>images/Register Button.png" alt="register"/>
                       </div>
                               
                             
                   </form>
                   
               </div>
             
              <div class="login clearfix" id="login_form">
                   <strong>Login</strong>
                   
                   <form action="" method="post" onsubmit="return false">
                       
                       <input  class="form_input" type="text" name="login" value="" id="login" placeholder="District Email Address" />
                            <label class="login_error"> </label>
                       <input  class="form_input" type="password" name="password" value="" id="pass" placeholder="Password" />
                            <label class="login_password_error"> </label>
                         
                        <div class=" pull-left forget_password ">
                             <a class="scola_anchor" href="#forget_password" title="Forgot your password">
                               <img src="<?php echo base_url();?>images/forget_ico.png" alt="register"/>
                               <strong>Password Help</strong>
                             </a>
                       </div>
                            
                       <div class="pull-right login_submit">
                          <div class=" pull-right register_submit login_submit">
                                <input type="submit" value="Login"/>
                                <img src="<?php echo base_url();?>images/login_btn.png" alt="register"/>
                            </div>
                       </div>
                   </form>
                   
               </div>
              
              
               <div class="forget clearfix" id="forget_password" >
                   <strong>Lost password?</strong>
                   
                   <form action="" method="post" onsubmit="return false">
                       
                       <input  class="form_input" type="text" name="login" value="" id="pass_input" placeholder="District Email Address" />
                            <label class="password_forget_error"> </label>
                       <div class="pull-right" id="password_submit">
                           <div class=" pull-right register_submit ">
                                <input type="submit" value="Get Password"/>
                                <img src="<?php echo base_url();?>images/login_btn.png" alt="register"/>
                            </div>
                       </div>
                   </form>
                   
               </div>
              
              
               <div class="forget_reset clearfix" id="forget_password_reset" >
                   <strong>Lost password?</strong>
                   
                   <form action="" method="post" onsubmit="return false">
                       <input type="hidden" id="user_id" name="user_id"/>
                        <input type="hidden" id="new_pass_key" name="new_pass_key"/>
                       <input class="form_input" type="password" name="new_password" value="" id="new_password" placeholder="New Password"  value=<?php echo set_value('password'); ?>/>
                             <label class="new_password_error"> </label> 
                       <input class="form_input" type="password" name="confirm_new_password" value="" id="confirm_new_password" placeholder="Confirm New Password"  value=<?php echo set_value('password'); ?>/>
                             <label class="reset_password_error"> </label> 
                       <div class="pull-right" id="new_password_reset">
                           <div class=" pull-right register_submit ">
                                <input type="submit" value="Set Password"/>
                                <img src="<?php echo base_url();?>images/login_btn.png" alt="register"/>
                            </div>
                       </div>
                   </form>
                   
               </div>
              
              
              
              </div>
          </section>
        </div>
     </body>
    
    
</html>


