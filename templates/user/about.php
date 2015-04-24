<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/user/css/style.css"/>
<link rel="stylesheet" href="templates/user/css/new_style.css"/>
<link rel="stylesheet" href="templates/user/css/about_Style.css">
<link rel="stylesheet" href="templates/user/css/downloadx_style.css"/>
<title>NQCL | About Us</title>
</head>

<!-- Importing the Javascript Date function -->

<?php
    
    require('javascript/javascript_plugins.php');

?>
<!-- end of the javascript required files -->

<body>

        <div class="Item_Detail" id="item_1">
        	
            <div class="the_real_organogram"><img src="templates/user/downloads/organogram_large.PNG"/></div>
            
            <center><button class="submit" style="margin-top:5px; width:200px;" id="item_1_button">OK</button></center>
        </div>

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
				<a href="index.php?action=about" class="active">About NQCL</a>
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


</div>

<div class="wrapper">

    <div class="general_about">
    
        <div class="guide_links">
        	<div class="head_strip">About Us Links</div>
            
            <ul>
			<li>
				<a href="#">About Us</a>
			</li>
            <li>
				<a href="#">Our Story</a>
			</li>
			<li>
				<a href="#">Our Team</a>
			</li>
			<li>
				<a href="#">Board of Management</a>
			</li>
			<li>
				<a href="#">Mission, Vision and Motto</a>
			</li>
            <li>
				<a href="#">Pharmacy & Poisons Board</a>
			</li>
            <li>
				<a href="#">KEMSA</a>
			</li>
            <li>
				<a href="#">Ministry of Health</a>
			</li>
            <li>
				<a href="#">OTHER IMPORTANT LINKS</a>
			</li>
            
		</ul>
            
            
        </div>
        
        <div id="bigslider">
        
         <div id="content">
                                            
             <div id="pages">
                                                
             <div class="page" style="background-color:#fff;">
             		<div class="strip1">About National Quality Control Laboratory</div><br /><br />
                    
                    <dl>
                    
                    <?php echo $the_message7;?>
    
    				</dl>
                    
                    
             </div>
                                                    
             <div class="page" style="background-color:#fff;">
                    <div class="strip1"><center>Our Story</center></div><br /><br />
                    
                    <?php echo $the_message8;?>
             </div>
                                                    
              <div class="page" style="background-color:#fff;">
                     <div class="strip1"><center>Our Team</center></div>
                     <br /><br />
                     
                     <div class="strip2" style="text-align:center;">
                        	 <table id="TableHeading" border="1" bordercolor="#999">
                                     	<tr>
                                        <th width="5%">No:</th>
                                        <th width="20%">Member Image</th>
                                        <th width="30%">Name</th>
                                        <th width="20%">Position</th>
                                        </tr>
                                        </table>
                                        </div>

                                   
                             					    <div id="Table-Container">
                                                    <table border="1" bordercolor="#999">
                                                    <?php ?>
                                             <?php foreach($pgresults['members'] as $mem){  ?>
                                            
                                             	<?php if ($mem->category =="Our Team"){?>
        <tr>  <td width="5%"><center><?php echo $mem->rank; ?></center></td>
              <td width="20%" height="50px"><center><img height="50px" width="50px" src="<?php echo $mem->getDisplayImagePath()?>"/></center></td>
              <td width="30%" ><center><?php echo $mem->description;?></center></td>
              <td width="20%"><center><?php echo substr($mem->location, 2);?></center></td>
                                                    </tr>  <?php } else{?> <?php }}?>
                                              
                                                                                                  
                                                    </table>
                                                    </div>
                        
              </div>
                                                    
              <div class="page" style="background-color:#fff;">
                     <div class="strip1"><center>Board of Management</center></div><br /><br />
                     	
                        <div class="strip2" style="text-align:center;">
                        	 <table id="TableHeading" border="1">
                                     	<tr>
                                        <th width="5%">No:</th>
                                        <th width="20%">Member Image</th>
                                        <th width="30%">Name</th>
                                        <th width="20%">Position</th>
                                        </tr>
                                        </table>
                                        </div>
                     
                      							<div id="Table-Container">
                                                <table border="1" bordercolor="#999">
                                                <?php  ?>
                                                    <?php foreach($pgresults['members'] as $mem){  ?>
                                             
                                             	<?php if ($mem->category =="Board of Management"){?>
                                                
              <tr>
              <td width="5%"><center><?php  ?></center></td>
              <td width="20%" height="50px"><center><img height="50px" width="50px" src="<?php echo $mem->getDisplayImagePath();?>"/></center></td>
              <td width="30%" ><?php echo $mem->description;?></td>
              <td width="20%"><?php echo substr($mem->location, 2);?></td>
                                                    </tr>  <?php } else{?> <?php }}?>
                                                    
                                                    
                                                    </table>
                                                    </div>
                     
               </div>
               
               <div class="page" style="background-color:#fff;">
                     <div class="strip1">Mission, Vision and Values</div><br /><br />
                                             <font style="color:#00a460;">Our Vision Statement</font><br /><br />
                        "To be an internationally respected centre of excellence for the quality control of medicines and medical devices"<br /><br />

                        <font style="color:#00a460;">Our Mission Statement</font><br /><br />
                        "We carry out the required tests and analysis and conduct research to ensure that medicines and medical devices meet quality requirements so as to contribute towards attainment of patient safety."<br /><br />

                        <font style="color:#00a460;">Our Motto</font><br /><br />
                        "Quality Medicines Protect"<br /><br />
               </div>
               
               
               <div class="page" style="background-color:#fff;">
                     <div class="strip1">Pharmacy and Poisons Board</center></div>
                     
                     <br /><br />
                     
                     <?php echo $the_message9;?>
                     
                      <br /><br /> <font style="color:#0099FF;">FOLLOW MORE ABOUT THEM THROUGH THE LINK BELOW</font><br /><br />Link: &nbsp; <a href="http://www.ctr.pharmacyboardkenya.org/" target="_blank">Pharmacy and Poisons Board Kenya</a>
               </div>
               
               <div class="page" style="background-color:#fff;">
                     <div class="strip1">Kenya Medical Supplies Agency</center></div>
                     
                     <br /><br />
                     
                    <?php echo $the_message10;?>
                    
<br /><br /> <font style="color:#0099FF;">FOLLOW MORE ABOUT THEM THROUGH THE LINK BELOW</font><br /><br />Link: &nbsp; <a href="http://www.kemsa.co.ke" target="_blank">Kenya Medical Supplies Agency [KEMSA]</a>
               </div>
               
               <div class="page" style="background-color:#fff;">
                     <div class="strip1">Ministry of Health</center></div>
                     
                     <br /><br />
                     
                     <?php echo $the_message11;?> <br /><br />
                     
                     Click the Link Below to go to the Ministry of Health Website <br /><br />
                     
                     Link:&nbsp; <a href="http://www.health.go.ke" style="text-transform:uppercase;" target="_blank">Ministry of Health Kenya</a>
               </div>
               
               <div class="page" style="background-color:#fff;">
                     <div class="strip1">Other Important Links</center></div>
                     
                     <br /><br />
                     
                     <?php echo $the_message12;?>
               </div>
                                                    
           </div>
                                            
          </div>
                                        
                                        
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
