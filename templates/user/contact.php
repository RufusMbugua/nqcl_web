<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/user/css/style.css"/>
<link rel="stylesheet" href="templates/user/css/new_style.css"/>
<link rel="stylesheet" href="templates/user/css/other_styles.css"/>
<script src="http://maps.googleapis.com/maps/api/js?AIzaSyA-jsGRlz514y2aFIP-XM0r7GdUHUhCxg8&sensor=true">
<title>NQCL | Contact Us</title>
</head>

<?php
	
	require('javascript/javascript_plugins.php');

?>
// <!-- end of the javascript required files -->


</script>
	<script type="text/javascript">
		var LGS=new google.maps.LatLng(-1.303227,36.807026);
		function initialize()
		{
		var mapProp = {
		  center:new google.maps.LatLng(-1.303227,36.807026),
		  zoom:15,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		var map=new google.maps.Map(document.getElementById("map_canvas")
		  ,mapProp);
		var marker=new google.maps.Marker({position:LGS,});

		marker.setMap(map);
		var infowindow1 = new google.maps.InfoWindow({
			content:'<div id="MapLocation"><b>National Quality Control Laboratory</b></p>P.O. Box 29726 - 00202 KNH, Nairobi</div>'
		});

		infowindow1.open(map,marker);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>



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
				<a href="index.php?action=news">News and Events</a>
			</li>
			<li>
				<a href="index.php?action=downloads">Downloads</a>
			</li>
			<li>
				<a href="index.php?action=contact" class="active">Contact Us</a>
			</li>
			
		</ul>
            </div>
        </div>
        
    
    </div>



</div>


<div class="wrapper" style="height:600px;">
	<div class="sample_head"><br />
    	Need to get in touch with us or ask any Questions? Get in touch with us on the Lines below

        
    </div><br />
    
    	<div class="contact">

    	<!-- the contact page / form removed from here -->
    		
        	<div class="map">
            	 <!-- insert Map here -->
            	 	<div id="map_canvas"></div>

            </div>

            <div class="main_address">
            	<div class="address">
                    	<div class="in_address" style="margin-top:20px;">
                        <font style="text-transform:uppercase; color:#00a460;">Physical Address:</font><br/><br/> Kenyatta National Hospital Complex, Hospital Road, University of Nairobi,
                         School of Pharmacy Building 2nd Floor, P.O. Box 29726 - 00202 KNH, Nairobi
                        </div>
                        <div class="in_address" style="padding-top:20px;">
                        Tell:&nbsp;&nbsp;<a href="callto:+254 020 2726963">+254 020 2726963</a> / 
                        <a href="callto:3544525/30">3544525/30</a> /
                        <a href="callto:+254 020 3544525">+254 020 3544525</a>
                        </div>
                        <div class="in_address" style="padding-top:10px;">
                       Fax:&nbsp;<a href="+254 020 2718073">
                         +254 020 2718073</a>
                        
                        </div>
                        <div class="in_address" style="padding-top:10px; padding-bottom:10px;">
                        Email:&nbsp;&nbsp;<a href="mailto:info@nqcl.go.ke">
                         info@nqcl.go.ke</a>
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
