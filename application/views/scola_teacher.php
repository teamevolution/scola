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
        <link href="<?php echo base_url();?>/css/profile_page.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/css/info_post.css" rel="stylesheet">
        
       <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.8.3.js"></script>
    
   
   <!--------------------------------------plupload------------------------------------------------->
   
    
   <link rel="stylesheet" href="<?php echo base_url();?>css/plupload/css/jquery.plupload.queue.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/jqueryui/custom-theme/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" />
   
  <!--------------------------------------------------------------------------------------->
<link href="<?php echo base_url();?>tinyeditor.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>/css/zebra_datepicker.css" type="text/css">

 <script type="text/javascript" src="<?php echo base_url();?>js/ajaxfileupload.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>tiny.editor.packed.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>zebra_datepicker.js"></script>  
 
 
 
         <script type="text/javascript" src="<?php echo base_url();?>js/scola_style.js"></script>
        
         
     <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>js/scola_ajax.js"></script>
               <script type="text/javascript" src="<?php echo base_url();?>js/teacher_page_ajax.js"></script>
       <script type="text/javascript" src="<?php echo base_url();?>js/teacher_effects_ajax.js"></script>
         

 
<!----------------------------------------plugin----------------------------------------->
 
  
   
<!------------------------------------------------------------------------------------------>         
         
    </head>
    
    
    <body >
       <div class="container container_change">
        <header >

            <div class="banner">
                <img src="<?php echo base_url();?>/images/shapeimage_1.png" alt="startpage_banner" >
                <span class="baner_change" id="baner_change_id">Change Banner Photo</span>
            </div>
            <section class="scola_description">
                <div class="left_scola_description pull-left">
             
                  
                        <div class="profile_image  pull-left">
                            <img class="profile_image_content" src="<?php echo base_url();?>/images/shapeimage_2.png" alt="profile image"/>
                            
                           <a href="#myModal" role="button"  data-toggle="modal"> 
                               <span class="profile_image_change" id="profile_image_change_id">Change Profile Photo</span>
                            </a>
                        </div>
                        <h1 class="scola_logo" >
                           <input type="text" class="teacher_name edit" title="edit" id="teacher_name_header" value="<?php echo $username; ?>"/>
                         </h1>
                   
                    <p class="description_text clearfix">
                      <textarea class="user_description edit" id="user_description_id"><?php echo $about; ?>
                       </textarea>
                    </p>
                </div>
                
                <!---------------------------------------- Profile pic change Modal ----------------------------------------->
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Upload</h3>
                        </div>
                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" id="form">
                                <strong>Choose Your Photo</strong>
                                

                                     <input type="file" id="title" name="" placeholder="Products Description">

                              

                                <div class=" pull-right profile_image_btn">
                                      <input type="submit" value="All Done"/>
                                   <img src="<?php echo base_url();?>images/done_btn.png" alt="register"/>
                                </div>
                            </form>
                          
                           

                          
                          
                        </div>
                        <div class="modal-footer">
                           
                            
                        </div>
                    </div>
                 <!---------------------------------------------End Modal ----------------------------------->
                
                <div class="right_scola_description pull-right">
                    <div class="right_info_rows clearfix">
                        <div class="right_info_rows_icons pull-right">
                        <img class="pull-right" src="<?php echo base_url();?>images/job-icon_normal-filtered.png" alt="works"/>
                        <label class="pull-right">Works</label>
                        </div>
                        <input type="text" title="edit" class="pull-right edit_label" id="teacher_works_id" value=<?php echo $works?>/>                        
                     </div>
                    
                     <div class="right_info_rows clearfix">
                       
                        <div class="right_info_rows_icons pull-right">
                            <img  class="pull-right"src="<?php echo base_url();?>images/21692185@N00-filtered.jpg" alt="studied"/>
                            <label class="pull-right">Studied</label>
                        </div>
                        <input type="text" title="edit" class="pull-right edit_label" id="teacher_studied_id" value="<?php echo $studied?>" />
                     </div>
                    
                     <div class="right_info_rows clearfix ">
                         <div class="right_info_rows_icons  pull-right">
                          <img  class="pull-right"src="<?php echo base_url();?>images/home-filtered.png" alt="subject"/>
                          <label class="pull-right">Subject</label>
                          </div>
                          
                           <input type="text" title="edit" class="pull-right edit_label" id="teacher_subject_id" value="<?php echo $subject?>" />
                     </div>
                    
                     <div class="right_info_rows clearfix">
                        <div class="right_info_rows_icons  pull-right">
                         <img  class="pull-right" src="<?php echo base_url();?>images/social_network-filtered.png" alt="district"/>
                         <label class="pull-right">District</label>
                       </div>
                       
                         <input type="text" title="edit" class="pull-right edit_label" id="teacher_district_id" value="<?php echo $district?>" />
                     </div>
                    
                 </div>
            </section>
            
            
            
        </header>
           
       <section class="succesfull_register"></section>
         <section class="post_part pull-left">
 <!-------------------------------------------POSTS---------------------------------------------->            
             <div class="left_post_part pull-left posts_tab active">
               <div class="post_icons_write clearfix pull-left">
               
                 <div class="post_icons_container pull-left">
                     <strong class="pull-left">Share Something</strong>
                    <ul class="pull-left">
                         <li id="share_button">
                             <a href="#share_post" title="share information" class="active">
                                 <img src="<?php echo base_url();?>images/Share Icon in a box.png" alt="information post"/>
                              </a>
                         </li>
                         
                         <li id="calender_button" class="try">
                             <a href="#calender_post" id="calender" title="share event" class="">
                                 <img src="<?php echo base_url();?>images/Calendar in Box.png" alt="calender post"/>
                              </a>
                         </li>
                         
                         <li id="photo_button">
                             <a href="#photo_post" title="share photo" class="">
                                 <img src="<?php echo base_url();?>images/Camera Icon in a Box.png" alt="photo post"/>
                              </a>
                         </li>
                         
                         <li id="video_button">
                             <a href="#video_post" title="share video" class="">
                                 <img src="<?php echo base_url();?>images/Video Icon In Box.png" alt="video post"/>
                              </a>
                         </li>
                         
                         <li id="form_button">
                             <a href="#form_post" title="share form" class="">
                                 <img src="<?php echo base_url();?>images/Form in a box Vector.png" alt="form post"/>
                              </a>
                         </li>
                         
                         <li id="audio_button">
                             <a href="#audio_post" title="share audio" class="">
                                 <img src="<?php echo base_url();?>images/audio icon in box.png" alt="audio post"/>
                              </a>
                         </li>
                     </ul>
                     
                     <div class="settings pull-right">
                         <img class="settings_button" src="<?php echo base_url();?>images/settings.png" alt="setting"/>
                      </div>
                    </div>
                  
                   
                 <div class="clearfix write_post"> 
                     
                   <div class="clearfix" id="share_post">  
                     
                   <form id="upload_file" class="" method="post" action="" enctype="multipart/form-data" onsubmit="return false;">
                   <div class="pull-left titleofpost">
                      <input type="text" id="info_post_title" placeholder="Info Post Title..."/> 
                  </div>
                       
                  <div class="pull-left clearfix write_info_post">
          <!------------------------plugin-------------------------------------------------------->
         





<textarea class="" id="tinyeditor" style="width: 400px; height: 200px"></textarea>
<script>
    
var editor = new TINY.editor.edit('editor', {
	id: 'tinyeditor',
	width: 574,
	height: 78,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|',
		'orderedlist', 'unorderedlist', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|','link', 'unlink'],
	footer: false,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	
});

  
</script>


                      
          <!--------------------------------------------------------------------------------------->            
                  </div>    
                      <div class="add_docs pull-left clearfix">    
                        <div class="pull-left info_add_file">
                            
                                
                                <!--    <input type="text" name="title" id="title" value="" />-->
                                     <img class="pull-left" src="<?php echo base_url();?>images/add_file.png" alt="post"/>
                                      <label class="pull-left">Add File</label>
                                     <input type="file" id="userfile" name="userfile" >
    
                            
                           </div> 
                          
                         

                        <div class="pull-left info_add_photo">
                            <img class="pull-left" src="<?php echo base_url();?>images/add_photo.png" alt="post"/>
                            <label class="pull-left">Add Photo</label>
                            <input type="file" id="userphoto" name="userphoto">
                            
                        </div>
                      </div>
                  
                    <div class="pull-right clearfix info_post_button" id="info_post_button_id">
                      
                        
                          <input type="submit" id ="info_post_button" value="All Done"/>
                         <img class="add_photo" src="<?php echo base_url();?>images/done_btn.png" alt="post"/>
                     </div>   
                 
                 </form> 
                       
                  </div> 
                     
 <!--------------------------------------------Create Event post---------------------------------------------------------->                    
               
 
              <div class="clearfix" id="calender_post">  
                     
                   <form id="upload_event" class="" method="post" action="" enctype="multipart/form-data" onsubmit="return false;">
                    
                   <div class="pull-left titleofpost ">
                      <input class="datepicker" type="text" id="event_post_date" placeholder="Date"/> 
                  </div>  
                       
                   <div class="pull-left titleofpost">
                      <input type="text" id="event_post_title" placeholder="Info Post Title..."/> 
                  </div>
                       
                  <div class="pull-left clearfix write_info_post">
          <!------------------------plugin-------------------------------------------------------->
         





<textarea class="" id="tinyeditor_event" style="width: 400px; height: 200px"></textarea>
<script>
    
var editor_event = new TINY.editor.edit('editor', {
	id: 'tinyeditor_event',
	width: 574,
	height: 78,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|',
		'orderedlist', 'unorderedlist', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|','link', 'unlink'],
	footer: false,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	
});

  
</script>


                      
          <!--------------------------------------------------------------------------------------->            
                  </div>    
                      <div class="add_docs pull-left clearfix">    
                        <div class="pull-left info_add_file">
                            
                                
                                <!--    <input type="text" name="title" id="title" value="" />-->
                                     <img class="pull-left" src="<?php echo base_url();?>images/add_file.png" alt="post"/>
                                      <label class="pull-left">Add File</label>
                                     <input type="file" id="userfile_event" name="userfile_event" >
    
                            
                           </div> 
                          
                         

                        <div class="pull-left info_add_photo">
                            <img class="pull-left" src="<?php echo base_url();?>images/add_photo.png" alt="post"/>
                            <label class="pull-left">Add Photo</label>
                            <input type="file" id="userphoto_event" name="userphoto_event">
                            
                        </div>
                      </div>
                  
                    <div class="pull-right clearfix info_post_button" id="event_post_button_id">
                      
                        
                          <input type="submit" id ="event_post_button" value="All Done"/>
                         <img class="add_photo" src="<?php echo base_url();?>images/done_btn.png" alt="post"/>
                     </div>   
                 
                 </form> 
                       
                  </div> 
                     
 <!--------------------------------------------Create Audio post---------------------------------------------------------->                    
               
 
              <div class="clearfix" id="audio_post">  
                     
                   <form id="upload_audio" class="" method="post" action="" enctype="multipart/form-data" onsubmit="return false;">
                  
                   <div class="pull-left titleofpost ">
                     <p class="audio_limit">Maximum 10MB per audio file. Maximum of 25MB per day.</p>  
                    </div> 
                   <div class="pull-left titleofpost">
                      <input type="text" id="audio_post_title" placeholder="Audio Post Title..."/> 
                  </div>
                       
                  <div class="pull-left clearfix write_info_post">
          <!------------------------plugin-------------------------------------------------------->
         





<textarea class="" id="tinyeditor_audio" style="width: 400px; height: 200px"></textarea>
<script>
    
var editor_audio = new TINY.editor.edit('editor', {
	id: 'tinyeditor_audio',
	width: 574,
	height: 78,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|',
		'orderedlist', 'unorderedlist', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|','link', 'unlink'],
	footer: false,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	
});

  
</script>


                      
          <!--------------------------------------------------------------------------------------->            
                  </div>    
                      <div class="add_docs pull-left clearfix">    
                        <div class="pull-left info_add_file audio_add_file">
                            
                                
                                <!--    <input type="text" name="title" id="title" value="" />-->
                                     <img class="pull-left" src="<?php echo base_url();?>images/add_file.png" alt="post"/>
                                      <label class="pull-left">Add Audio File(s)</label>
                                     <input type="file" id="userfile_audio" name="userfile_audio" >
    
                            
                           </div> 
                          
                         

                        <div class="pull-left info_add_photo">
                            <img class="pull-left" src="<?php echo base_url();?>images/add_photo.png" alt="post"/>
                            <label class="pull-left">Add Photo</label>
                            <input type="file" id="userphoto_audio" name="userphoto_audio">
                            
                        </div>
                      </div>
                  
                    <div class="pull-right clearfix info_post_button" id="audio_post_button_id">
                      
                        
                          <input type="submit" id ="audio_post_button" value="All Done"/>
                         <img class="add_photo" src="<?php echo base_url();?>images/done_btn.png" alt="post"/>
                     </div>   
                 
                 </form> 
                       
                  </div> 
 
 
 
 <!--------------------------------------------Create Video post---------------------------------------------------------->                    
               
 
              <div class="clearfix" id="video_post">  
                     
                   <form id="upload_video" class="" method="post" action="" enctype="multipart/form-data" onsubmit="return false;">
                  
                   
                   <div class="pull-left titleofpost">
                      <input type="text" id="video_post_title" placeholder="Video Post Title..."/> 
                  </div>
                       
                  <div class="pull-left clearfix write_info_post">
          <!------------------------plugin-------------------------------------------------------->
         





<textarea class="" id="tinyeditor_video" style="width: 400px; height: 200px"></textarea>
<script>
    
var editor_video = new TINY.editor.edit('editor', {
	id: 'tinyeditor_video',
	width: 574,
	height: 78,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|',
		'orderedlist', 'unorderedlist', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|','link', 'unlink'],
	footer: false,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	
});

  
</script>


                      
          <!--------------------------------------------------------------------------------------->            
                  </div>    
                      <div class="add_docs pull-left clearfix titleofpost">    
                          <input class="video" type="text" id="video_url" placeholder="Paste Youtube or Vimeo URL Here"/> 
                      </div>
                  
                    <div class="pull-right clearfix info_post_button" id="video_post_button_id">
                      
                        
                          <input type="submit" id ="video_post_button" value="All Done"/>
                         <img class="add_photo" src="<?php echo base_url();?>images/done_btn.png" alt="post"/>
                     </div>   
                 
                 </form> 
                       
                  </div> 
 
 
 
 <!--------------------------------------------Create Form post---------------------------------------------------------->                    
               
 
              <div class="clearfix" id="form_post">  
                     
          <form id="upload_form" class="" method="post" action="" enctype="multipart/form-data" onsubmit="return false;">
                  
                   <div class="form_post_headers">    
                    <h5>1.Form Details</h5>
                   </div>
                   
                   <div class="pull-left titleofpost">
                      <input type="text" id="form_post_title" placeholder="Title of this form post"/> 
                  </div>
                       
                  <div class="pull-left clearfix write_info_post">
          <!------------------------plugin-------------------------------------------------------->
         





<textarea class="" id="tinyeditor_form" style="width: 400px; height: 200px"></textarea>
<script>
    
var editor_form = new TINY.editor.edit('editor', {
	id: 'tinyeditor_form',
	width: 574,
	height: 78,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|',
		'orderedlist', 'unorderedlist', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|','link', 'unlink'],
	footer: false,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	
});

  
</script>


                      
          <!--------------------------------------------------------------------------------------->            
                  </div>   
                      <div class="submit_form pull-left clearfix"> 
                        <div class="form_post_headers pull-left">    
                            <h5>2.Form Fields</h5>
                        </div>
                       
                       <div class="teacher_form_create pull-left clearfix">
                           <div class="form_create_row pull-left clearfix">
                                 <strong class=" clearfix">Name</strong>
                                 <div class="first_name pull-left">
                                     <input type="text" id="first_name"/>
                                     <p>First</p>
                                  </div>
                                 <div class="last_name pull-left">
                                     <input type="text" id="last_name"/>
                                     <p>Last</p>
                                 </div>
                             </div>
                           
                           <div class="form_create_row pull-left clearfix">
                                <strong>Phone</strong>
                                 <div class="first_name">
                                     <input type="text" id="phone"/>
                                     
                                  </div>
                                 
                             </div>
                           
                              <div class="form_create_row pull-left clearfix">
                                <strong>Email</strong>
                                 <div class="first_name">
                                     <input type="text" id="email"/>
                                     
                                  </div>
                                 
                             </div>
                           
                                
                             
                             <div class="form_create_row pull-left clearfix">
                                <div class="gender pull-left clearfix"> 
                                <strong class="pull-left clearfix">Gender</strong>
                                </div>
                                <div class="pull-left clearfix">
                                 <div class="radio_gender clearfix">
                                     <input class="pull-left" type="radio" name="radio" id="radio_male"/>
                                     <label class="pull-left">Male</label>
                                  </div>
                                        
                                  <div class="radio_gender clearfix">
                                     <input class="pull-left" type="radio" name="radio" id="radio_female"/>
                                     <label class="pull-left">Female</label>
                                  </div>  
                                </div>    
                                 
                             </div>
                        </div>   
                       
                  
                    <div class="pull-right clearfix info_post_button" id="form_post_button_id">
                      
                        
                          <input type="submit" id ="form_post_button" value="Submit Form"/>
                         <img class="add_photo" src="<?php echo base_url();?>images/done_btn.png" alt="post"/>
                     </div>   
                     <div class="clearfix pull-left current_submission">       
                      <label class="">View Current Submissions</label> 
                     </div> 
                    </div>   
                 </form> 
                       
                  </div> 
 
 <!--------------------------------------------Create photo post---------------------------------------------------------->                    
               
 
              <div class="clearfix" id="photo_post">  
                     
<!--here form tag-->     <div id="upload_photo" class="" method="post" action="" enctype="multipart/form-data" onsubmit="return false;">
                  
                   <div class="pull-left titleofpost">
                      <input type="text" id="photo_post_title" placeholder="Title of this form post"/> 
                  </div>
                       
                  <div class="pull-left clearfix write_info_post">
          <!------------------------plugin-------------------------------------------------------->
         





<textarea class="" id="tinyeditor_photo" style="width: 400px; height: 200px"></textarea>
<script>
    
var editor_photo = new TINY.editor.edit('editor', {
	id: 'tinyeditor_photo',
	width: 574,
	height: 78,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|',
		'orderedlist', 'unorderedlist', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|','link', 'unlink'],
	footer: false,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	
});

  
</script>


                      
          <!--------------------------------------------------------------------------------------->            
                  </div>
                       
                  <div class="submit_form pull-left clearfix"> 
 <!---------------------------------------Photo Gallery plugin------------------------------------------------>      
                  <div id="insertAfterme">
        <a class="uploadFiles" href="#">Upload Files</a>
        <input type="hidden" value="<?php echo base_url();?>" id="baseurl"/>
        </div>
              
 <!-- dialog box -->
        <div id="uplaodBox" title="Upload Files">
            <form method="POST" action="">
                <div id="uploader">
                </div>
            </form>
        </div>
        <!-- end dialog box -->
        
 
                   
                   <!-- link js files -->
        
      
        <script type="text/javascript" src="<?=base_url()?>js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>


        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.gears.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.silverlight.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.flash.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.browserplus.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.html4.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/plupload.html5.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/plupload/jquery.plupload.queue.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>js/plupload.js"></script>

        <!-- end js files -->
                   
                   
                   
                  <!------------------------------------------------------------------------------------
                      <div class="pull-right clearfix info_post_button" id="photo_post_button_id">
                         <input type="submit" id ="photo_post_button" value="All Done"/>
                         <img class="add_photo" src="<?php echo base_url();?>images/done_btn.png" alt="post"/>
                     </div>   
                     ---> 
                   </div>   
   <!--form end-->              </div> 
                       
                  </div> 
 
                     
                </div> <!--  end of create post container-->  
                 
               
                   
                   
<!---===============================load previous posts=====================================------>                   
                 <div class="previous_post clearfix">
                     
                     <div class="share_post_info left_post_part_paragraph previous_post_content clearfix active" id="">
                    
                     <div class="paragraph_header clearfix ">
                         <img class="pull-left" src="<?php echo base_url();?>images/Share Icon in a box.png" alt="information content"/>
                         <div class="pull-left">
                            <h3 class="pull-left">Check this out class!</h3>
                            <p>April 20, 2012 to Grade 5 Science</p>
                         </div>
                         <img src="<?php echo base_url();?>images/arrow.png" alt="delete post" class="delete_post pull-right"/>
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
                     
                  </div>
                
                 
              </div>
 
 <!------------------------------------------MANAGE SETTINGS--------------------------------------------------------->
        <div class="manage_settings_tab left_post_part pull-left">
               <div class="post_icons_write clearfix pull-left">
               
                 <div class="post_icons_container pull-left">
                     <strong class="pull-left">Edit Settings</strong>
                    <ul class="pull-left edit_settings">
                         <li id="share_button" class="personal_info">
                             <a href="#share_post" title="" class="active">
                                 <img src="<?php echo base_url();?>images/personal_info.png" alt="information post"/>
                              </a>
                         </li>
                         
                         <li id="calender_button" class="personal_group">
                             <a href="#calender_post" id="calender" title="" class="">
                                 <img src="<?php echo base_url();?>images/group_icon.png" alt="calender post"/>
                              </a>
                         </li>
                         
                         <li id="photo_button" class="personal_security">
                             <a href="#photo_post" title="" class="">
                                 <img src="<?php echo base_url();?>images/security.png" alt="photo post"/>
                              </a>
                         </li>
                         
                         <li id="video_button" class="personal_email">
                             <a href="#video_post" title="" class="">
                                 <img src="<?php echo base_url();?>images/mail.png" alt="video post"/>
                              </a>
                         </li>
                         
                         
                     </ul>
                     
                     <div class="settings back pull-right">
                         <img class="back_button" src="<?php echo base_url();?>images/back.png" alt="setting"/>
                      </div>
                    </div>
                   
                   <div class="write_post">
                       
                       <div class="personal" id="personal_info">
                           <form class="personal_info_form" onsubmit="return false">
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">Name</label>
                                   <input type="text" title="edit" value="<?php echo $username;?>" id="teacher_name"/>
                                </div> 
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">Current Email</label>
                                   <input type="text" title="edit" value="<?php echo $email_id;?>" id="teacher_email" readonly/>
                                </div> 
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">About You</label>
                                   <textarea id="teacher_about" class="pull-left"><?php echo $about;?></textarea>
                                </div> 
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">Works</label>
                                   <input type="text" title="edit" value="<?php echo $works;?>" id="teacher_works"/>
                                </div> 
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">Studied</label>
                                   <input type="text" title="edit" value="<?php echo $studied;?>" id="teacher_university"/>
                                </div> 
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">Subject</label>
                                   <input type="text" title="edit" value="<?php echo $subject;?>" id="teacher_subject"/>
                                </div> 
                               <div class="personal_form_row">
                                   <label class="personal_form_label pull-left">District</label>
                                   <input type="text" title="edit" value="<?php echo $district;?>" id="teacher_district"/>
                                </div> 
                               
                               
                               <div class=" pull-right save_settings">
                                    <input type="submit" value="Save"/>
                                    <img src="<?php echo base_url();?>images/done_btn.png" alt="save"/>
                                </div>
                           </form> 
                           
                          </div> 
                           
        <!----------------------------------Password Change------------------------------------------>   
        
                        <div class="pull-left password_change" id="change_password">
                           
                              <strong>Change Password</strong>
                   
                                <form onsubmit="return false" >
                                    <input class="form_input" title="edit" type="password" name="current_password" value="" id="old_password" placeholder="Current Password.."  value=<?php echo set_value('password'); ?>/>
                                          <label class="old_password_error"> </label> 
                                     <input class="form_input" title="edit" type="password" name="new_password" value="" id="new_password" placeholder="New Password..."  value=<?php echo set_value('password'); ?>/>
                                          <label class="new_password_error"> </label> 
                                        <input class="form_input" title="edit" type="password" name="confirm_new_password" value="" id="confirm_new_password" placeholder="Retype New Password.."  value=<?php echo set_value('password'); ?>/>
                                          <label class="confirm_new_password_error"> </label> 
                                         <div class="change_password_help "> 
                                                <div class=" pull-left forget_password ">
                                                     <a class="scola_anchor" href="#forget_password" title="Forgot your password">
                                                       <img src="<?php echo base_url();?>images/forget_ico.png" alt="register"/>
                                                       <strong class="change_password_strong">Password Help</strong>
                                                     </a>
                                               </div>

                                          
                                            <div class=" pull-right change_password_button">
                                                   <input type="submit" value="All Done"/>
                                               <img src="<?php echo base_url();?>images/done_btn.png" alt="register"/>
                                              </div>
                                          </div>
                                  </form>
                              
                             
                       </div>   
        
      <!------------------------------------Email Settings----------------------------------------------->  
      
                     <div class="pull-left settings_email" id="email_settings">
                           
                              <strong class="pull-left email_strong">Current Email</strong>
                              <p class="pull-left">team.evolution@agstechnologies.com</p>
                                <form action="" method="post" class="email_form" onsubmit="return false">
                                    <input class="form_input" title="edit" type="email" name="email" value="" id="new_email" placeholder="New Email..."  value=<?php echo set_value('password'); ?>/>
                                          <label class="email_error"> </label> 
                                     <input class="form_input" title="edit" type="email" name="re_email" value="" id="re_email" placeholder="Retype New Email..."  value=<?php echo set_value('password'); ?>/>
                                          <label class="username_error"> </label> 
                                     <input class="form_input" title="edit" type="password" name="password" value="" id="password" placeholder="Scola Password to Confirm..."  value=<?php echo set_value('password'); ?>/>
                                          <label class="password_error"> </label> 
                                          
                                    <div class=" pull-right email_done save_settings">
                                             <input type="submit" value="All Done"/>
                                         <img src="<?php echo base_url();?>images/done_btn.png" alt="All done"/>
                                    </div>
                             </form>       
                                          
                                 
                               <form class="personal_info_form social_address" onsubmit="return false">
                                    <div class="personal_form_row">
                                        <label class="personal_form_label pull-left">Phone</label>
                                        <input type="text" title="edit" value="<?php echo $phone ;?>" id="teacher_phone_id"/>
                                     </div> 
                                    <div class="personal_form_row">
                                        <label class="personal_form_label pull-left">Website</label>
                                        <input type="text" title="edit" value="<?php echo $website ;?>" id="teacher_website_id"/>
                                     </div> 
                                    <div class="personal_form_row">
                                        <label class="personal_form_label pull-left">Facebook</label>
                                        <input type="text" title="edit" value="<?php echo $facebook ;?>" id="teacher_facebook_id"/>
                                     </div> 
                                    <div class="personal_form_row">
                                        <label class="personal_form_label pull-left">Twitter</label>
                                        <input type="text" title="edit" value="<?php echo $twitter ;?>" id="teacher_twitter_id"/>
                                     </div> 
                                    <div class="personal_form_row">
                                        <label class="personal_form_label pull-left">Youtube Channel</label>
                                        <input type="text" title="edit" value="<?php echo $youtube ;?>" id="teacher_youtube_id"/>
                                     </div> 

                               
                               
                                        <div class=" pull-right register_submit login_submit save_settings">
                                             <input type="submit" value="Save"/>
                                             <img src="<?php echo base_url();?>images/done_btn.png" alt="save"/>
                                         </div>
                                    </form> 
                                   
                   
                           
                       </div>   
        
      <!----------------------------------------------------------------------------------->  
                       
                   </div>
                 
                 </div>  
                 
                 
                
                 
              </div>
            </div>
<!---------------------------------------------ASIDE---------------------------------------------------->             
             <aside class="pull-right">
              <div class="aside_content pull-right">   
              <div class="type_post">   
               <div class="view_post clearfix pull-left">
                    <strong class="pull-left">View By Post Type</strong>
                    <strong class="pull-right all">All</strong>   
                </div>
                <div class="post_type_img clearfix pull-left">
                   <ul class="pull-left">
                       <li>
                           <img class="pull-left" src="<?php echo base_url();?>images/Share Icon in a box.png" alt="post search"/>
                        </li>
                         <li>
                             <img class="pull-left" src="<?php echo base_url();?>images/Calendar in Box.png" alt="post search"/>
                        </li>
                         <li>
                             <img class="pull-left" src="<?php echo base_url();?>images/Camera Icon in a Box.png" alt="post search"/>
                        </li>
                         <li>
                             <img class="pull-left" src="<?php echo base_url();?>images/Video Icon In Box.png" alt="post search"/>
                        </li>
                         <li>
                             <img class="pull-left" src="<?php echo base_url();?>images/Form in a box Vector.png" alt="post search"/>
                        </li>
                         <li>
                             <img class="pull-left" src="<?php echo base_url();?>images/audio icon in box.png" alt="post search"/>
                        </li>
                     
                   </ul>
                </div>
               </div>
                 
                <div class="archive_post">
                    <div class="view_post clearfix pull-left">
                        <strong class="pull-left">Archives</strong>
                   </div>
                   <div class="archive_select post_type_img">
                       <select>
                           <option selected="selected">All</option>
                               
                        </select>   
                    </div>
                 </div> 
               </div>
                  <div class="clearfix pull-left logout_option">
                  <p class="logout_footer">Powered by <a> Scola </a>|<a title="logout" href="<?php echo base_url();?>index.php/auth/logout"> Logout </a></p>
              </div>
                 
              </aside> 
              
             
                  
              
             
          </section>
        </div>
     </body>
    
    
</html>


