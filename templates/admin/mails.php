<?php
	ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/admin/icons/top_logo.png"/>
<link rel="stylesheet" href="templates/admin/css/basic.css"/>
<link rel="stylesheet" href="templates/admin/css/menu.css"/>
<link rel="stylesheet" href="templates/admin/css/two_style.css"/>
<link rel="stylesheet" href="templates/admin/css/downloadx2_style.css"/>
<link rel="stylesheet" href="templates/admin/css/profile.css"/>
<script type="text/javascript" src="templates/admin/js/jQuery-1.7.2-min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$(".drop").click(function() {
		$("#DropDownMenu").fadeIn(800);
		$("#DropDownMenu").mouseleave(function() {
			$("#DropDownMenu").fadeOut(800);
		});
	});
});

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

$(document).ready(function() {
		
	$("#viewing").click(function() {
		$("#fade").show(300);
		
		var height = 310;
		var width = 420;

		document.getElementById('housepanel').style.marginTop = (window.innerHeight - height)/3 +'px';
		document.getElementById('housepanel').style.marginLeft = (window.innerWidth - width)/2.1 +'px';
		$("#housepanel").fadeIn(800);

	});
	$("#closeButton").click(function() {
		$("#fade").hide(1000);
		$("#housepanel").fadeOut(300);
	});
	
	
});


</script>

<title>Administrator | Dashboard</title>

<title>Text Editor</title>
		<script type="text/javascript" src="templates/admin/ckeditor/ckeditor.js" ></script>
		<script type="text/javascript">
			window.onload = function() {
				CKEDITOR.replace('workspace', { height: '250px', width: '400px', uiColor: '#cccccc' });
			}
		</script>
</head>

<body>

<?php require("myprofile.php")?>

<div class="hero">
	<div class="main_strip">
    	<div class="instrip">
       		<div class="shower"><img src="templates/admin/icons/web_foota_id.png"/></div>
        	<div class="admin"></div>
        
        <div class="horizontal">
        <div class="in_dater">
            <script language="JavaScript">
			sampleDate1=new Date()
			document.write (mdy(sampleDate1))
			</script>
        </div>
        
            <div class="drop">  
                <div id="DropDownMenu">
                <a href="admin.php?action=logout">Logout</a>
                <a href="#" id="viewing">Profile</a>
                </div>
            </div>	
                        
             <div class="name"><?php echo $_SESSION['administrator']?></div>	
              <div class="user">Logged in as:</div>
          </div>
          
          <div class="horizontal" style="margin-top:5px; text-transform:uppercase; 
          border-top:thin #f2f2f2 dotted;">
          	<ul>
                <li>
                     <a href="admin.php?action=mails">Home | services | about us</a>
                </li>
                <li>
                      <a href="admin.php?action=messages">News and events</a>
                </li>
                <li>
                      <a href="admin.php?action=about">Staff Members</a>
                </li>
                <li>
                      <a href="admin.php?action=settings">account settings</a>
                </li>
                <!-- <li>
                      <a href="admin.php?action=mails" class="active">Mails</a>
                </li> -->
			</ul>
          
          </div>
          
        </div>
    
    </div>
    
    
    <div class="main_wrapper" style="height:530px;">
    
      		

		        <div class="left_div">
		                        
		                                    
		        <div class="strip2" style="text-align:center;">
		                        	 <table id="TableHeading" border="1">
		                                     	<tr>
		                                        <th width="80%">Homepage and Services page updates</th>
		                                        <th >Action</th>
		                                        </tr>
		                                        </table>
		                                        </div>
		                                   
		                             					    <div id="Table-Container">
		                                                    <table border="1" bordercolor="#999">
		                                                    
		                                                    <?php  foreach($pgresults['messages'] as $msg){ ?>
		                                                    
		              <tr><td width="80%" height="30px" style="text-indent:10px;"><?php echo $msg->data_type?></td>					              
		              <td ><center><a href="admin.php?action=read_mails&id=<?php echo $msg->ID?>">View or Edit</a></center></td>
		                                                    </tr>
		                                                    <?php }?>
		                                                    
		                                                    
		                                                    </table>
		                                                    </div>
		                                                   
		                        
		              </div>

		              <!-- end of the first table -->

		              <!-- start of a new table -->


		              <div class="right_div">
		                        
		                                    
					        <div class="strip2" style="text-align:center;">
					                        	 <table id="TableHeading" border="1">
					                                     	<tr>
					                                        <th width="80%">About NQCL Updates</th>
					                                        <th >Action</th>
					                                        </tr>
					                                        </table>
					                                        </div>
					                                   
					                             					    <div id="Table-Container">
					                                                    <table border="1" bordercolor="#999">
					                                                    
					                                                    
					                                                     <?php  foreach($pgresults_x['messages_x'] as $msg){ ?>
		                                                    
		              <tr> <td width="80%" height="30px" style="text-indent:10px;"><?php echo $msg->about_type?></td>					              
		              <td ><center><a href="admin.php?action=about_edit&id=<?php echo $msg->ID?>">View or Edit</a></center></td>
		                                                    </tr>
		                                                    <?php }?>
					                                                    
					                                                    
					                                                    </table>
					                                                    </div>
					                                                   
		                        
		              	</div>

<!-- Used to upload the photo -->

		       <!-- <div class="full_div">
		       		<div class="strip_xx"> Choose Images to upload </div>

		       		<br/><br/>
		       
			       	<form action="#" method="post" enctype="multipart/form-data">
					  Please choose a file: <input class="text" type="file" name="uploadFile"><br>
					  <input type="submit" class="submit" value="Upload File" style="margin-left:140px; height:25px; margin-top:20px; width:150px;">
					</form> 

		        </div> -->

              <!-- end of the second table -->


    </div>
              
             
    
    </div>
            
</div>


</body>
</html>