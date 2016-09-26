<!DOCTYPE html>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
<![endif]-->
<head>
<meta charset="utf-8">
<title>Solomon Max Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/favicon.html"/>
<link rel="stylesheet" href="css/style.css" media="screen"/>
<link rel="stylesheet" id="main-color" href="css/colors/blue-color.css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/prettyPhoto.css" media="screen"/>
<link rel="stylesheet" href="css/font-awesome/font-awesome.min.css" media="screen"/>
<link rel="stylesheet" href="css/layer-slider.css" media="screen"/>
<link rel="stylesheet" href="css/flexslider.css" media="screen"/>
<link rel="stylesheet" href="css/fontello/fontello.css" media="screen"/>
<!-- All JavaScript Files (Remove those you will not use)-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- JQUERY JS FILE -->
<script type="text/javascript" src="js/flex-slider.min.js"></script>
<!-- FLEX SLIDER JS FILE -->
<script type="text/javascript" src="js/navigation.min.js"></script>
<!-- MAIN NAVIGATION JS FILE -->
<script type="text/javascript" src="js/jquery.layerslider.js"></script>
<!-- LAYER SLIDER JS FILE -->
<script type="text/javascript" src="js/layerslider.transitions.js"></script>
<!-- LAYER SLIDER TRANSITIONS JS FILE -->
<script type="text/javascript" src="js/map.min.js"></script>
<!-- GOOGLE MAP JS FILE -->
<script type="text/javascript" src="js/jquery.theme.plugins.min.js"></script>
<!-- TRANSITIONS JS FILE -->
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<!-- CAROUSEL SLIDER JS FILE -->
<script type="text/javascript" src="js/prettyPhoto.min.js"></script>
<!-- PRETTYPHOTO JS FILE -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- CUSTOMN JAVASCRIPT JS FILE -->

</head>
<body>
<div id="container"><!-- main container starts-->
	<div id="wrapp"><!-- main wrapp starts-->
		<header id="header" style="background:#FFFFFF;">
        <hr style="height: 6px; background-color:#DE772A;">
        <div class="header-container">
            <div id="header-top">
                <a href="/" id="logo">
                	<img src="images/logo2.jpg" width="600" height="100" alt="" />
                </a>
            </div>
        </div>
        <div id="main-navigation">
            <!--main navigation wrapper starts -->
            <div class="nav__container">
                <ul class="main-menu">
                    <!--main navigation starts -->
                    <li class="active"><a href="/" title="home"><i class="icon-home"></i>Home</a></li>
                    <li><a href="about.html"><i class="icon-user"></i>Who we are</a>
                        <ul>
                            <li><a href="services.html"><i class="icon-wrench"></i>Our Services</a></li>
                            <li><a href="vision.html"><i class="icon-desktop"></i>Vision and Mission</a></li>
                        </ul>
                    </li>
                    <li><a href="education.html"><i class="icon-folder-open"></i>Education</a></li>
                    <li><a href="employers.php"><i class="icon-user"></i>Employers</a></li>
                    <li><a href="register.php"><i class="icon-folder-open"></i>Job Seekers</a></li>
                    <li><a href="project1.html"><i class="icon-suitcase"></i>Projects</a></li>
                    <li><a href="blog/" target="_blank"><i class="icon-globe"></i>Blog</a></li>
                    <li><a href="contact.html"><i class="icon-envelope"></i>Contact Us</a></li>
                </ul>
                <!-- main navigation ends-->
            </div>
        </div>
        <!--main navigation wrapper ends -->
    </header>
		
        <div id="content">
        
			<div class="container">
            <div class="one" style="margin-top:20px;">
            
            	<form action="process.php?page=register" id="contact-form" class="simple-form reg-form" method="post" enctype="multipart/form-data">
                	<input type="hidden" name="submit">
                    
                    <h4>Select User Type</h4>
					<fieldset class="one-half">
						<label style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>User Type : </label>
						<div style="float:right; width:300px;">
 
                        <input type="radio" name="type" checked value="skilled" class="skill_toggle" style="box-shadow:none; border:none; float:left; width:20px; margin-top:3px;" /> <span style="float:left;">Skilled</span>
                        <br>

                        
                        <input type="radio" name="type" value="unskilled" class="skill_toggle" style="box-shadow:none; border:none; float:left; width:20px; margin-top:3px;" /> <span style="float:left;">Unskilled</span>
                        
                        </div>
					</fieldset>
                    
                    <div class="horizontal-line"></div>
                	
                    <h4>Create Login Details</h4>
					<fieldset class="one-half">
						<label data-title='Email ID' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Enter your  Email ID : </label>
						<input type="text" class="email requiredField" name="email" style="float:right;"/>
					</fieldset>
					<fieldset class="one-half">
						<label data-title='Password' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Create a Password for your account : </label>
						<input type="password" class="requiredField" name="password1" id="password1" style="float:right;"/>
					</fieldset>
					<fieldset class="one-half">
						<label data-title='Confirm Password' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Confirm Password:</label>
						<input type="password" class="requiredField" name="password2" id="password2" style="float:right;"/>
					</fieldset>
                    
                    <div class="horizontal-line"></div>
                    
                    <h4>Your Contact Information</h4>
                   <fieldset class="one-half">
                      <label data-title='Full Name' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please mention your Full Name : </label>
                      <input class="text requiredField" type="text"  name="fname" style="float:right;"/>					
                   </fieldset>  
                   
                   <fieldset class="one-half">
                      <label data-title='Full Address' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your Full Address : </label>
                      <input  class="text requiredField" type="text" name="address" style="float:right;"/>					
                   </fieldset>          
                 
                   <fieldset class="one-half">
                      <label data-title='Mobile No' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your Mobile No : </label>
                      <input  class="text requiredField" type="text"  name="mobile" style="float:right;"/>					
                   </fieldset>
				   
				   <fieldset class="one-half">
                      <label data-title='Gender' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Choose Gender : </label>
                      <select id="sex" class="text requiredField" name="sex" style="width:150px; height:25px; float:right;">
                      <option value="">===Select Gender===</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                     </select>			
                   </fieldset>		
					                                      				   
				    <fieldset class="one-half">
                      <label data-title='Date of Birth' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your Date of Birth : </label>
                      <input id="dob" class="text requiredField" type="date" name="dob" style="float:right;"/>					
                   </fieldset>
				   
				   <fieldset class="one-half">
                      <label data-title='Town' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your Town : </label>
                      <input  class="text requiredField" type="text" name="town" style="float:right;"/>					
                   </fieldset>
                   
                   <fieldset class="one-half">
                      <label data-title='LGA' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your LGA : </label>
                      <input  class="text requiredField" type="text" name="lga" style="float:right;"/>					
                   </fieldset>
                   
                   <fieldset class="one-half">
                      <label data-title='State' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your State : </label>
                      <input  class="text requiredField" type="text" name="state" style="float:right;"/>					
                   </fieldset>
				   
				   <fieldset class="one-half">
                      <label data-title='Country' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Enter Your Country : </label>
                      <input  class="text requiredField" type="text" name="country" style="float:right;"/>					
                   </fieldset>
                   
                   
                   
                    <div class="horizontal-line"></div>
					
                <h4>Work Experience</h4>
                          <fieldset class="one-half">
								 <label data-title='Key Skills' style="float:left; margin-right:20px; margin-top:6px;"> <span>* </span>What are your Key Skills? </label>
                                 <textarea class="text requiredField"; style="width:250px; height:36px;" name="key_skills" cols="1" rows="2" style="float:right;"> </textarea>
							</fieldset>
 
			<div id="skill_div"> 
			
						  <fieldset class="one-half">
							   <label data-title='Years of experience' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>How much work experience do you have?
                               </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="expyear" class="text requiredField" name="exp_year" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                      <option value="Fresher">Fresher</option>
                                      <option value="1 Year">1 Year</option>
									  <option value="2 Years">2 Years</option>
									  <option value="3 Years">3 Years</option>
									  <option value="4 Years">4 Years</option>
									  <option value="5 Years">5 Years</option>
									  <option value="6 Years">6 Years</option>
									  <option value="7 Years">7 Years</option>
									  <option value="8 Years">8 Years</option>
									  <option value="9 Years">9 Years</option>
									  <option value="10 Years">10 Years</option>
									  <option value="more than 10 Years">more than 10 Years</option>
									 </select><!--</span>-->
								 
							 </fieldset>
  
                          <fieldset class="one-half">
                              <label data-title='Functional Areas' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Which Functional Area Do You Work
                               in? </label>
                              
                              <select id="funcarea" class="text requiredField" name="func_area" style="width:150px; height:25px; float:right;">
                              <option value="">===Select===</option>                                                        
                              <option value="ARCHITECT">ARCHITECT</option>
							  <option value="ARCHITECT">ACCOUNTING</option>
							  <option value="AGRICULTURE">AGRICULTURE</option>
							  <option value="ARCHITECT">BANKING AND FINANCE</option>
							  <option value="BUSINESS ADMISTRATION">BUSINESS ADMISTRATION</option>
							  <option value="COMMUNICATIONS">COMMUNICATIONS</option>
							  <option value="CONSTRUCTIONS">CONSTRUCTIONS</option>
							  <option value="EDUCATION">EDUCATION</option>
                              <option value="ENGINEERING">ENGINEERING</option>
							  <option value="ENVIRONMENTAL">ENIVRONMENTAL</option>
							  <option value="GOVERNMENT">GOVERNMENT</option>
							  <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
							  <option value="HOTELS & RESORT">HOTELS & RESORT</option>
							  <option value="HUMAN RESOURCE">HUMAN RESOURCE</option>
							  <option value="MANAGEMENT">MANAGEMENT</option>
							  <option value="MARKETING">MARKETING</option>
                              <option value="MEDICAL">MEDICALS</option>
							  <option value="HEALTH SERVICES">HEALTH SERVICES</option>
                              <option value="PHARMARCY">PHARMARCY</option>
							  <option value="PUBLIC ADMINISTRATION">PUBLIC ADMINISTRATION</option>
                              <option value="PHARMARCY">OTHERS</option>
                             </select>
                          </fieldset>

                          
                          <div class="horizontal-line"></div>
						  
						  <h4>Educational Details</h4>
							 <fieldset class="one-half">
							   <label data-title='Your Primary Education Details' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Name of Your Primary School
                               </label>
							   <input class="text requiredField" type="text"  name="pri_name" style="float:right;"/>		 
							 </fieldset>
							<fieldset class="one-half">
							   <label data-title='Year Of Graduation' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Year Of Graduation                               </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="p_grad" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                  <?php
								 	$d = date('Y');
									for($i=$d; $i>=1960; $i--){
								  ?>
                                      <option value="<?=$i?>"><?=$i?></option>
	  							  <?php
									}
								  ?>	  
								  
									 </select><!--</span>-->
								 
							 </fieldset>
							 
							 <fieldset class="one-half">
							   <label data-title="Qualification Obtained" style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Qualification Obtained                              </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="p_qual" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                      <option value="First School Leaving">First School Leaving</option>
                                      <option value="Others">Others</option>
									</select><!--</span>-->
								 
							 </fieldset>
							 <div class="horizontal-line"></div>
							 
							 <fieldset class="one-half">
							   <label data-title='Your Secondary Education Details' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>
                               Name of Your Secondary School
                               </label>
							   <input class="text requiredField" type="text"  name="sec_name" style="float:right;"/>		 
							 </fieldset>
							<fieldset class="one-half">
							   <label data-title='Year Of Graduation' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Year Of Graduation                                </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="sec_grad" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                  <?php
								 	$d = date('Y');
									for($i=$d; $i>=1960; $i--){
								  ?>
                                      <option value="<?=$i?>"><?=$i?></option>
	  							  <?php
									}
								  ?>	  
									 </select><!--</span>-->
								 
							 </fieldset>
							 
							 <fieldset class="one-half">
							   <label data-title="Qualification Obtained" style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Qualification Obtained                              </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="sec" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                       <option value="WAEC">WAEC</option>
									  <option value="NECO">NECO</option>
									  <option value="SSCE">SSCE</option>
									  <option value="GCE">GCE</option>
                                      <option value="Others">Others</option>
									</select><!--</span>-->
								 
							 </fieldset>
                             
							 <div class="horizontal-line"></div>

							 <fieldset class="one-half">
							   <label data-title='Your University Education Details' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Name of Your University
                               </label>
							   <input class="text requiredField" type="text"  name="uni_name" style="float:right;"/>		 
							 </fieldset>
                             <fieldset class="one-half">
							   <label data-title='Graduate Degree' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Course of Study
                               </label>
							   <input class="text requiredField" type="text"  name="uni_degree" style="float:right;"/>		 
							 </fieldset>
                             
							 <fieldset class="one-half">
							   <label data-title='Year Of Graduation' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Year Of Graduation                                </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="uni_grad" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                       <?php
								 	$d = date('Y');
									for($i=$d; $i>=1960; $i--){
								  ?>
                                      <option value="<?=$i?>"><?=$i?></option>
	  							  <?php
									}
								  ?>	  
									 </select><!--</span>-->
								 
							 </fieldset>
							 
							 <fieldset class="one-half">
							   <label data-title="Qualification Obtained" style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Class Obtained </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="uni_grade" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                     <option value="First class">First Class</option>
                                      <option value="2:1/Upper Credit">2:1/Upper Credit</option>
                                      <option value="2:2/Lower Credit">2:2/Lower Credit</option>
									  <option value="Third Class">Third Class</option>
									  <option value="Pass">Pass</option>								  
									</select><!--</span>-->
								 
							 </fieldset>
							 
							 <fieldset class="one-half">
							   <label data-title="Qualification Obtained" style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Qualification Obtained                              </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pri_duration" class="text requiredField" name="uni_qual" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                     <option value="BSc">BSc</option>
                                      <option value="BTech">BTech</option>
									  <option value="BSc(ED)">BSc(ED)</option>
									  <option value="BEng">BEng</option>
                                      <option value="BA">BA</option>
									  <option value="BCA">HND</option>
									  <option value="BCA">OND</option>
                                      <option value="Others">Others</option>									  
									</select><!--</span>-->
								 
							 </fieldset>                         
                             
                             <div class="horizontal-line"></div>

							 <fieldset class="one-half">
							   <label data-title='Your Masters University' style="float:left; margin-right:20px; margin-top:6px;">Masters University
                               </label>
							   <input class="text" type="text"  name="ms_univ" style="float:right;"/>		 
							 </fieldset>
                             
                             <fieldset class="one-half">
							   <label data-title='Your Masters Degee' style="float:left; margin-right:20px; margin-top:6px;">Masters Degree
                               </label>
							   <input class="text" type="text"  name="ms_degree" style="float:right;"/>		 
							 </fieldset>
                             
							 <fieldset class="one-half">
							   <label data-title='Year Of Masters Completion' style="float:left; margin-right:20px; margin-top:6px;">Year Of MS Completion                                </label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="ms_completion" class="text" name="ms_completion" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                  <?php
								 	$d = date('Y');
									for($i=$d; $i>=1960; $i--){
								  ?>
                                      <option value="<?=$i?>"><?=$i?></option>
	  							  <?php
									}
								  ?>
									 </select><!--</span>-->
								 
							 </fieldset>
                             
                             
                             <div class="horizontal-line"></div>

							 <fieldset class="one-half">
							   <label data-title='Your Post-Graduate University' style="float:left; margin-right:20px; margin-top:6px;">Post-Graduate University
                               </label>
							   <input class="text" type="text"  name="pg_univ" style="float:right;"/>		 
							 </fieldset>
                             
                             <fieldset class="one-half">
							   <label data-title='Your Post-Graduate Degee' style="float:left; margin-right:20px; margin-top:6px;">Post-Graduate Degree
                               </label>
							   <input class="text" type="text"  name="pg_degree" style="float:right;"/>		 
							 </fieldset>
                             
							 <fieldset class="one-half">
							   <label data-title='Year Of PG Completion' style="float:left; margin-right:20px; margin-top:6px;">Year Of PG Completion</label>
							   <!--<div style="float:right">-->
							      <!--<span class="" style="float:left; margin-right:5px;" name="empyears">-->
                                  <!--<span id="yr" style="padding-top:2px; float:right; margin-left:10px; display:block; width:50px;"> Years</span>-->
								  <select id="pg_completion" class="text" name="pg_completion" style="width:150px; height:25px; float:right;">
								      <option value="">===Select===</option>
                                  <?php
								 	$d = date('Y');
									for($i=$d; $i>=1960; $i--){
								  ?>
                                      <option value="<?=$i?>"><?=$i?></option>
	  							  <?php
									}
								  ?>
									 </select><!--</span>-->
								 
							 </fieldset>
							 
							 </div>
                             
                                   
                              <div class="horizontal-line"></div>
                             
                              <fieldset class="one-half">
                                  <label data-title='File Upload' style="float:left; margin-right:20px; margin-top:6px;"><span>* </span>Please Upload Your Passport</label>
                                  <input type="file" name="uploadedfile" style="display:inline; float:right;">
                              </fieldset>
  
                    <div class="horizontal-line"></div>
                    
                    
                        <fieldset class="one-half" style="margin-bottom:50px;">
                            <input type="submit" value="Sign up as Basic User" name="basic_user" class="button small color round" style="float:left;"/>
                            <input type="submit" value="Sign up as Premium User" name="premium_user" class="button small color round" style="float:left; margin-left:20px;"/>
                        </fieldset>
                    
				</form>
                
                
            </div>
            </div>
            
            
            
            <div id="copyrights"><!-- copyrights starts-->
            <div class="container">
           		<div class="one-half" style="float:left; margin-left:15px;"><p>&copy; Copyright 2013 <a href="index.html">SOLOMON MAX LTD </a>.</div>
            	<div class="one-half last" style="float:left;">
                    <ul class="social-icons footer"><!-- social links starts-->
                        <li><a target="_blank" href="https://twitter.com/" style="background:none;"><i class="icon-social-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/pages/Solomon-Max/146574165532300" style="background:none;"><i class="icon-social-facebook"></i>
                        </a></li>
                        <li><a target="_blank" href="https://plus.google.com/u/0/112565495128078644800/about?partnerid=gplp0" style="background:none;">
                        <i class="icon-social-google+"><img src="images/google+.jpg" alt=""/></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/uas/login‎" style="background:none;"><i class="icon-social-linkedin"></i></a></li>
                    </ul><!-- social links ends-->
                </div>
            </div>
            </div><!-- copyrights ends -->
            
		</div><!-- main content starts-->
	</div> <!-- main wrapp starts-->
</div><!-- main container ends-->

</body>

</html>