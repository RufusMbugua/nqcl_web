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
<link rel="stylesheet" href="templates/admin/css/actives_table.css"/>
<link rel="stylesheet" href="templates/admin/css/team_members.css"/>

<!-- insert the header pligin here -->

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
                      <a href="admin.php?action=about">Staff Members</a>
                </li>
                <li>
                      <a href="admin.php?action=settings" class="active">account settings</a>
                </li>
                <!-- <li>
                      <a href="admin.php?action=mails">Mails</a>
                </li> -->
            </ul>
          
          </div>
          
        </div>
    
    </div>
    
    
    <div class="main_wrapper" style="height:400px;">
    
    		<div class="classA1" style="margin-left:8px;"><div class="strip_b">Create New User</div><br /><br />
            
       			 <form method="post" name="createcounts" action="admin.php?action=newuser">
                 
        				<select class="text"  style="width:290px; height:35px; margin-left:5px;" name="title">
                        <optgroup label="Administrator Titles"style="color:#09F;">
                        	<option value="0">Select Title</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Mrs.">Mrs. </option>
                            <option value="Miss.">Miss.</option>
                            <option value="Prof.">Prof. </option>
                            </optgroup>
                        </select>
                        
                        <input type="text" class="text" style="margin-top:11px; float:left; margin-left:5px; height:25px; width:380px;" 
           				 name="f_name" required="required" placeholder="First Name"/>
                         
                         <input type="text" class="text" style="margin-top:11px; float:left; width:380px; height:25px; margin-left:5px;" 
           				 name="l_name" required="required" placeholder="Last Name"/>
                         
                         <input type="email" class="text" style="margin-top:11px; float:left; width:380px; height:25px; margin-left:5px;" 
           				 name="email" placeholder="E - Mail Address"/>
                         
                         <input type="text" class="password" style="margin-top:11px; float:left; width:380px; height:25px; margin-left:5px;" 
           				 name="password" readonly="readonly" value="12345678"/>
                        
                        <center>
                        <input type="submit" class="submit" style="width:200px; margin-top:25px;" name="create" value="Create User" />
                        </center>
        		 </form>
        
           </div> 
           
           <div class="classA11" style="margin-left:8px;"><div class="strip_b">Active Users</div><br /><br />
       			
                     
                 <div class="strip2" style="text-align:center;">
            <table id="TableHeading" border="1">
                                     	<tr>
                                        <th width="25%">User Name</th>
                                        <th width="30%">Email Address</th>
                                        <th width="25%">Last Seen</th>
                                        <th >Action</th>
                                        </tr>
                                        </table>
                                        </div>
                                   
                             					    <div id="Table-Container">
                                                    <table border="1" bordercolor="#999">
                                                    <?php foreach($doha['active_user'] as $mem2){ ?>
              <tr> <td width="25%" height="30px" style="text-indent:10px;"><?php echo $mem2->title?><?php echo " "?><?php echo $mem2->f_name?><?php echo " "?><?php echo $mem2->l_name?></td>	
              <td width="30%" height="30px" style="text-indent:10px;"><?php echo $mem2->email?></td>		
              <td width="25%" height="30px" style="text-indent:10px;"><?php echo $mem2->lastlogin?></td>			              
              <td ><center><a href="admin.php?action=del_admin&ID=<?php echo $mem2->ID?>">Remove</a></center></td>
                                                    </tr>                                                     
                                                    <?php }?>
                                                    
                                                    </table>
                                                    </div>
        
           </div>
           
          
           
    
    
    </div>
            
</div>


</body>
</html>