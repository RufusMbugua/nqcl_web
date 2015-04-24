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
<link rel="stylesheet" href="templates/admin/css/profile.css"/>
<link rel="stylesheet" href="templates/admin/css/downloadx_style.css"/>

<!-- insert the header pligin here -->

<?php
	require("header/header.php")
?>

<title>Administrator | Dashboard</title>

		<script type="text/javascript" src="templates/admin/ckeditor/ckeditor.js" ></script>
		<script type="text/javascript">
			window.onload = function() {
				CKEDITOR.replace('workspace', { height: '250px', width: '625px', uiColor: '#cccccc' });
				
				CKEDITOR.replace('workspace1', { height: '250px', width: '625px', uiColor: '#cccccc' });
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
                        
             <div class="name"><?php echo $_SESSION['administrator'] ?></div>	
              <div class="user">Logged in as:</div>
          </div>
          
          <div class="horizontal" style="margin-top:5px; text-transform:uppercase; 
          border-top:thin #f2f2f2 dotted; #f2f2f2 dotted;">
          	<ul>
                <li>
                     <a href="admin.php?action=mails" class="active">Home | services | about us</a>
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
                      <a href="admin.php?action=mails">Mails</a>
                </li> -->
                
			</ul>
          
          </div>
          
        </div>
    
    </div>
    
    
	<div class="main_wrapper" style="height:520px;">
    
    	<div class="classA" style="margin-left:10px;">
        
        <div class="strip_b">Homepage and Services page updates</div>
        
        <form  action="admin.php?action=add_home_services" method="post">
        
        				<select class="text"  style="width:400px; color:#00a460; text-transform:uppercase; height:30px; margin-top:10px;" name="data_type" onchange="getdata(this.value)">

                        	<optgroup label="Homepage links" style="color:#09F;">
                            <option value="1">Welcome to NQCL</option>
                            <option value="2">Our Services</option>
                            <option value="4">News and Events </option>
                            </optgroup>
                            <optgroup label="Our Services Page Links" style="color:#09F;">
                            <option value="7">Our Services </option>
                            </optgroup>
                        </select><br /><br />
                        <!-- <input type = 'text' id = "usmanov" /> -->
                        <textarea class="ckedior" id="workspace"  name="data_body">

                            <?php
                                    if (isset($_POST['data_body'])) {
                                        echo $_POST['data_body'];
                                    } else {
                                        echo 'This is my default typing space.';
                                    }
                                ?>
							
                        </textarea>

                        
                        <input type="submit" class="submit" style="width:300px;  float:left; margin-left:164.50px;
                        margin-top:10px;" name="send" value="Submit" />
         </form>
        
        </div>
        
        <div class="classA" style="margin-left:10px;">
            
            <div class="strip_b">About NQCL Updates</div>
            
            <form  action="admin.php?action=add_about" method="post">
            
                            <select class="text"
                             style="width:400px; color:#00a460; text-transform:uppercase; margin-top:10px; height:30px;" name="about_type">
                                <optgroup label="About Us Page Links" style="color:#09F;">
                                <option value="1">About us</option>
                                <option value="5">Our story</option>
                                <option value="6">Pharmacy and Poisons Board</option>
                                <option value="7">KEMSA</option>
                                <option value="8">MOH</option>
                                <option value="9 Links">Other Links</option>
                                </optgroup>
                            </select><br /><br />
                            
                            <textarea class="ckedior" id="workspace1" name="about_body">
                                <?php
                                    if (isset($_POST['about_body'])) {
                                        echo $_POST['about_body'];
                                    } else {
                                        echo 'This is my default typing space.';
                                    }
                                ?>
                            </textarea>
                            
                            
                            <input type="submit" class="submit" style="width:300px;  float:left; margin-left:164.50px;
                            margin-top:10px;" name="send" value="Submit" />
            </form>
            
          </div>
              
              
        
        
        </div>
            
    </div>

</div>

</body>
</html>