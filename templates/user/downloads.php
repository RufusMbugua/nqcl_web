<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/user/css/style.css"/>
<link rel="stylesheet" href="templates/user/css/new_style.css"/>
<link rel="stylesheet" href="templates/user/css/download_style.css"/>
<title>NQCL | NQCL Downloads</title>
</head>

<!--  Importing the Javascript Date function -->

<script language="JavaScript">
function mdy(todaysdate) {
//calls the function mdy why to get the date
var ext = "";
switch(todaysdate.getDate()) {
	case 1:
	case 21:
	case 31:
		ext = "st";
		break;
	case 2:
	case 22:
		ext = "nd";
		break;
	case 3:
	case 23:
		ext = "rd";
		break;
	default:
		ext = "th";
		break;
}
var month = "";
switch(todaysdate.getMonth()+1) {
	case 1:
		month = "January";
		break;
	case 2:
		month = "February";
		break;
	case 3:
		month = "March";
		break;
	case 4:
		month = "April";
		break;
	case 5:
		month = "May";
		break;
	case 6:
		month = "June";
		break;
	case 7:
		month = "July";
		break;
	case 8:
		month = "August";
		break;
	case 9:
		month = "September";
		break;
	case 10:
		month = "October";
		break;
	case 11:
		month = "November";
		break;
	case 12:
		month = "December";
		break;
	default:
		month = "Error";
		break;
}
return todaysdate.getDate()+ext+" "+month+", "+todaysdate.getFullYear();
}
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
				<a href="index.php?action=downloads" class="active">Downloads</a>
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
	
    <div class="strip2" style="padding-bottom:10px; padding-top:10px; text-transform:uppercase;">
    <font style="color:#0099FF;">Below are the attached Files from NQCL, Download to Save a copy for yourself</font></div>

						<div class="strip2">
                        	 <table id="TableHeading" border="1">
                                     	<tr>
                                        <th width="20%">Files</th>
                                        <th width="30%">File Name</th>
                                        <th width="20%">File Format</th>
                                        <th width="20%">File Size</th>
                                        <th>Download</th>
                                        </tr>
                                        </table>
                                        </div>
                                   
                                        <div id="Table-Container">
                                        <table border="1" bordercolor="#999">
                                        <tr>
                                            <td width="20%" height="50px"><center><img src="templates/user/logo/pdf.jpg"/></center></td>
                                            <td width="30%" >Sample Submission Guidelines</td>
                                            <td width="20%"><center>PDF</center></td>
                                            <td width="20%"><center>169.09 KB</center></td>
                                            <td><a href="templates/user/downloads/guidelines.pdf" target="_blank"><center>Download</center></a> </td>
                                        </tr>
                                        <tr>
                                            <td width="20%" height="50px"><center><img src="templates/user/logo/pdf.jpg"/></center></td>
                                            <td width="30%" >Analysis Request Form</td>
                                            <td width="20%"><center>PDF</center></td>
                                            <td width="20%"><center>84.02 KB</center></td>
                                            <td><a href="templates/user/downloads/analysis_request Form.pdf" target="_blank"><center>Download</center></a> </td>
                                        </tr>
                                        <tr>
                                            <td width="20%" height="50px"><center><img src="templates/user/logo/pdf.jpg"/></center></td>
                                            <td width="30%" >The NQCL Brochure</td>
                                            <td width="20%"><center>PDF</center></td>
                                            <td width="20%"><center>336.78 KB</center></td>
                                            <td><a href="templates/user/downloads/NQCL Brochure.pdf" target="_blank"><center>Download</center></a> </td>
                                        </tr>
                                       
                                        
                                        </table>
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
