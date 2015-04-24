<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/user/css/style.css"/>
<link rel="stylesheet" href="templates/user/css/new_style.css"/>
<link rel="stylesheet" href="templates/user/css/services.css"/>
<title>NQCL | Our Services</title>
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
        	<div class="real_logo">
        		<a href="home.php"><img src="templates/user/logo/middle_.png" style=""/></a>
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
				<a href="index.php?action=home">Home</a>
			</li>
			<li>
				<a href="index.php?action=about">About NQCL</a>
			</li>
			<li>
				<a href="index.php?action=services" class="active">Our Services</a>
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


</div>


<div class="wrapper" style="padding-top:10px;">

	<div class="sevice_pic">
    	<div class="top_motto">
    		Quality Medicines Protect
    	</div>
    </div>

	<div id="main_for_contents">
    	 
    <div class="others">
    <div class="topic" style="border:none;">
   		 <font style="color:#00a460; font-size:16px; text-transform:uppercase;">Information about our services</font>
    </div><br /><br />
         Because of our Quality Assurance, the Customers who trust in us are of very high profile.<br /><br />
         
          <dl>
         
            <?php echo $the_message6;?>
                        
         </dl>
         
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
