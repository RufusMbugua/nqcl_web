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
<link rel="stylesheet" href="templates/admin/css/downloadx_style.css"/>
<link rel="stylesheet" href="templates/admin/css/profile.css"/>
<link rel="stylesheet" href="templates/admin/css/about_table.css"/>
<link rel="stylesheet" href="templates/admin/css/team_members.css"/>

<!-- insert the header pligin here -->
<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#imager')
.attr('src', e.target.result)
.width(200)
.height(200);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>

<?php
  require("header/header.php")
?>

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
                      <a href="admin.php?action=about" class="active">Staff Members</a>
                </li>
                <li>
                      <a href="admin.php?action=settings">account settings</a>
                </li>
                <!-- <li>
                      <a href="admin.php?action=mails">Mails</a>
                </li> -->

      			</ul>
          
          </div>
          
        </div>
    
    </div>
    
    
  <div class="main_wrapper" style="height:520px;">
    
          
          <div class="classA" style="margin-left:10px; height:400px; width:500px; background-color:#e5e9e7;">
            
            <div class="strip_b">View and Update Team Members</div><br /><br />
            
            <form enctype="multipart/form-data" method="post" action="admin.php?action=newmember">
            
                    <div class="box1">
                         <div class="pass_pic">
                            <img id="imager" />
                         </div>
                         
                    <input type="file" class="text" placeholder="Search File" name="imagepath" 
                    style="margin-top:10px; border-color:transparent; width:190px;" onChange="readURL(this);" />   
                    </div>
                    
                    <div class="box2">
                        <select class="text"  style="width:280px; color:#00a460; text-transform:uppercase; height:30px;" name="type">
                            <optgroup label="Staff Member type" style="color:#09F;">
                            <option value="Our Team">Our Team</option>
                            <option value="Board of Management">Board of Management</option>
                            </optgroup>
                        </select>
                        
                        <select class="text"  style="width:280px; margin-top:10px; height:30px;" name="title">
                        <optgroup label="Homepage links" style="color:#09F;">
                        <option value="0">Select Title Here...</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Mrs.">Mrs. </option>
                        <option value="Miss.">Miss.</option>
                        <option value="Prof.">Prof. </option>
                        </optgroup>
                        </select>
                        
                        <input type="text" class="text" style= "width:270px; height:25px; color:#00a460; font-size:14px;
                         margin-top:10px;" 
                         name="name" placeholder="Enter Name here..."/>

                        <!-- Removed code to enable choosing -->
                         
                         <!-- <input type="text" class="text" style= "width:270px; height:25px; color:#00a460; font-size:14px;
                         margin-top:10px;" 
                         name="position" placeholder="Enter Position here..."/> -->
                        
                        <select class="text"  style="width:280px; margin-top:10px; height:30px;" name="position" placeholder="Enter Position here...">
                        <optgroup label="Rank Per Position" style="color:#09F;">
                        <option value="0">SELECT MEMBER POSITION</option>
                        <option value="1 Director">Director</option>
                        <option value="2 Senior Deputy Director">Senior Deputy Director</option>
                        <option value="3 Deputy Director">Deputy Director</option>
                        <option value="4 Head of Unit">Head of Unit</option>
                        <option value="5 Deputy Head of Unit">Deputy Head of Unit</option>
                        <option value="6 Staff">Normal Staff</option>
                      
                        
                        </optgroup>
                        </select>

                         
                         <input type="submit" class="submit" style="width:270px;  float:left; margin-left:5px;
                         margin-top:80px;" name="send" value="Add New Staff Member" />
                         <br /><br />
        
                    </div>
                    
                            
                            
            </form>
            
          </div>
          
          <div class="classA4"><div class="strip_b">View and Update Team Members</div><br /><br />
           
            <div class="strip21" style="text-align:center;">
            <table id="TableHeading1" border="1">
                                     	<tr>
                                        <th width="30%">Member Name</th>
                                        <th width="25%">Position</th>
                                        <th width="30%">Membership type</th>
                                        <th >Action</th>
                                        </tr>
                                        </table>
                                        </div>
                                   
                             					    <div id="Table-Container1">
                                                    <table border="1" bordercolor="#999">
                                                    <?php foreach($pgresults['members'] as $mem){ ?>
              <tr> <td width="50px" height="50px"><img height="50px" width="50px" src="<?php echo $mem->getDisplayImagePath()?>"/></td>
              <td width="23%" height="50px" style="text-indent:10px;"><?php echo $mem->ptype?><?php echo " "?><?php echo $mem->description?></td>	
              <td width="25%" height="50px" style="text-indent:10px;"><?php echo substr($mem->location, 2) ?></td>
              <td width="30%" height="50px" style="text-indent:10px;"><?php echo $mem->category?></td>				              
              <td ><center><a href="admin.php?action=del_member&id=<?php echo $mem->id?>">Remove</a></center></td>
                                                    </tr>                                                     
                                                    <?php }?>
                                                  
                                                    </table>
                                                    </div>
           
           
           </div>
          
          
  </div>
            
    </div>

</div>

</body>
</html>