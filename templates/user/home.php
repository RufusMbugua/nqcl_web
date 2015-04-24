<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/user/css/style.css"/>
<link rel="stylesheet" href="templates/user/css/new_style.css"/>
<link rel="stylesheet" href="templates/user/css/services.css"/>
<title>NQCL | Homepage</title>
</head>

<!-- Importing the Javascript Date function -->

<?php
	
	require('javascript/javascript_plugins.php');

?>
<!-- end of the javascript required files -->


<body>

<div class="hero">

	<div class="header">
    	<img src="templates/user/logo/MOH.png" style="float:left; margin-left:5px; height:61px; margin-top:7px;"/>
        <img src="templates/user/logo/NQCL_logo.png" style="float:right; margin-right:10px; margin-top:7px;"/>
        
    	<div class="logo">
        	<div class="real_logo" style="background-color:#;">
        		<a href="index.php?action=home"><img src="templates/user/logo/middle_.png" style=""/></a>
            </div>
                	 <div class="dater">
                     <a href="#">FAQs</a>&nbsp; | <a href="#">WebMail</a>
                     </div>
                     
                     <div class="in_dater">
                     	<script language="JavaScript">
						sampleDate1=new Date()
						document.write (mdy(sampleDate1))
						</script>
                     </div>
        </div>
              
        <div class="after_head">
        	<div class="menu_column">
            	<ul>
			<li>
				<a href="index.php?action=home" class="active">Home</a>
			</li>
			<li>
				<a href="index.php?action=about">About NQCL</a>
			</li>
			<li>
				<a href="index.php?action=services">Our Services</a>
			</li>
			
			<li>
				<a href="index.php?action=news">News and Events</a>
			</li>
			<li>
				<a href="index.php?action=downloads">Downloads</a>
			</li>
			<li>
				<a href="index.php?action=contact">Contact Us</a>
			</li>
			
		</ul>
            </div>
        </div>
        
    
    </div>
    
   <div class="wrapper"> 
    
    	<div class="slide_show">	<!--<div class="moto">Quality Medicines Protect</div>-->
        <div id="cover_page">
        	<div class="cover_page">
        		<img src="templates/user/slides/1.png" style="width:1000px; display: block;float:  left;"/>
                <img src="templates/user/slides/2.png" style="width:1000px; display: block;float:  left;"/>
                <img src="templates/user/slides/3.png" style="width:1000px; display: block;float:  left;"/>
                <img src="templates/user/slides/4.png" style="width:1000px; display: block;float:  left;"/>
                	
            </div>
         </div>
    
   		</div>
        
        <div class="welcome" style="padding-bottom:3px; text-align:justify; border-bottom:thin solid #f1f1f1;">
       		 <h1>Welcome to NQCL</h1>
            <h2>
            <?php echo $the_message;?>
            </h2>
            
        </div>

        
        <div class="welcome">
        	<div class="classA">
            	<div class="in_classA"><img src="templates/user/images/our_services.png"/></div>
                <div class="mid_classA"><h1>Our Services</h1><h2><?php echo $the_message1;?></h2>
                </div>
                	<div class="bottom_classA"><a href="index.php?action=services"><font color="#00a460">+read More ...</font></a></div>
            </div>
            
            <div class="classA_news" style="margin-left:47px;">
            	<div class="in_classA"><img src="templates/user/images/our_news.jpg"/></div>
                <div class="mid_classA">

	                <div class="scrolling_text_strip"><h1>News and Events</h1></div>

	                <div id="scrolling_text">
	                	<h2><?php echo $the_message3;?></h2>
	                </div>
                </div>
                	<div class="bottom_classA"><a href="index.php?action=news"><font color="#00a460">+read More ...</font></a></div>
            </div>
            
            <div class="classA" style="margin-left:47px;">
            	<div class="in_classA"><img src="templates/user/images/contact_us.png"/></div>
                <div class="mid_classA"><h1>Contact Us</h1><h2>
Physical Address: Kenyatta National Hospital Complex, Hospital Road, University of Nairobi, School of Pharmacy Building 2nd Floor, P.O. Box 29726 - 00202 KNH, Nairobi </h2>
                </div>
                	<div class="bottom_classA"><a href="index.php?action=contact"><font color="#00a460">+read More ...</font></a></div>
            </div>
            
            
        </div>
   </div> 
    
</div>


<!-- start of the required footer file -->
<?php
	
	require('footer/footer.php');

?>

<!-- End of the required file, footer -->

</body>
</html>
