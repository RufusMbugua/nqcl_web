<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/user/css/style.css"/>
<link rel="stylesheet" href="templates/user/css/new_style.css"/>
<link rel="stylesheet" href="templates/user/css/news.css"/>
<link rel="stylesheet" href="templates/user/css/more_news.css">
<title>NQCL | News and Events</title>
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
				<a href="index.php?action=services">Our Services</a>
			</li>
			
			<li>
				<a href="index.php?action=news" class="active">News and Events</a>
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
	<div class="general_news">
    	<div class="articles">
        	
            <div class="head_strip">News Articles and Upcoming Events</div>
    
    
    <div class="innerstrip">
            
            <?php foreach($pgresults['news'] as $mynews) {?>
            <div class="big_news">
            	<div class="news_thumb">
                    <div class="news_thumb_footer"><?php echo $mynews->news_type?></div>   
                </div>
                <div class="in_big_news">
                	<div class="in_news_strip"><div class="in_news_stripA1">News Heading:</div>
                    <div class="in_news_stripA111" style="font-size:12px;"><?php echo $mynews->news_head?></div></div>
                    <div class="main_news">
                    <?php echo $mynews->news_body?> 
                    
                    </div>
                    <div class="in_news_strip">
                    <?php
                    $news_date = $mynews->time_posted;
					$newdate = date('d-m-Y', strtotime($news_date));
					?>
                   
                    	<div class="in_news_stripA"><a href="index.php?action=news_reader&ID=<?php echo $mynews->ID ?>"
                         class="small_item_1">+ read More...</a></div>
                        <div class="in_news_stripB">Posted on:&nbsp;&nbsp;<?php echo $newdate;?></div>
                    </div>
                </div>
            
            </div>
            <?php }?>
            
            
             
            
            </div>
                        
        </div>
        
        	<div class="recent">
            	<div class="head_strip"">Recent Posts</div>
                
                <?php foreach ($pgresults['news'] as $mynews){?>
                <div class="in_recent_strip"><img src="templates/user/logo/home_bullet.png" style="float:left; margin-top:3px;"/>
                <a href="#"><?php echo $mynews->news_head?></a></div>
                <?php }?>
                 
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
