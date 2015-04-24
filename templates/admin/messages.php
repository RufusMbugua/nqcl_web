<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/admin/icons/top_logo.png"/>
<link rel="stylesheet" href="templates/admin/css/basic.css"/>
<link rel="stylesheet" href="templates/admin/css/menu.css"/>
<link rel="stylesheet" href="templates/admin/css/profile.css"/>
<link rel="stylesheet" href="templates/admin/css/two_style.css"/>
<link rel="stylesheet" href="templates/admin/css/downloadx_style.css"/>
<link rel="stylesheet" href="templates/admin/css/team_members.css"/>
<link rel="stylesheet" href="templates/admin/css/articles.css"/>

<!-- to add the date picker -->


<!-- insert the header pligin here -->


<?php
	require("header/header.php");
?>


<title>Administrator | Dashboard</title>

<?php
	require_once("header/date_picker.php");
?>


<title>Text Editor</title>

		<script type="text/javascript" src="templates/admin/ckeditor/ckeditor.js" ></script>
		<script type="text/javascript">
			window.onload = function() {
				CKEDITOR.replace('workspace', { height: '250px', width: '625px', uiColor: '#cccccc' });
			}
		</script>
</head>

<body>

<!-- this section calls the profile.php plugin -->

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
                      <a href="admin.php?action=messages" class="active">News and events</a>
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
            
            <div class="strip_b">News and Events updates</div>
            
            <form  action="admin.php?action=add_news" method="post">
            
                            <input type="text" class="text" style= "width:390px; height:23px; margin-top:10px; color:#00a460; font-size:14px;" 
                             name="news_head" required="required" placeholder="Enter aricle header here..."/>
                            <br /><br />

                            Select the type of Post:   <select class="text"
                             style="width:100px; color:#00a460; margin-top:5px; height:30px;" name="news_type">
                                <option value="Local News">Local News</option>
                                <option value="Upcoming Event">Upcoming Event</option>
                            </select>
                            <br/><br/>

                            
                            <textarea class="ckedior" id="workspace" name="news_body">
                                <?php
                                    if (isset($_POST['news_body'])) {
                                        echo $_POST['news_body'];
                                    } else {
                                        echo 'This is my default typing space.';
                                    }
                                ?>
                            </textarea>
                            
                          

                            <input type="submit" class="submit" style="width:300px;  float:left; margin-left:164.50px;
                            margin-top:10px;" name="send" value="Post Article" />
             </form>
            
          </div>
          
          
           <div class="classA41"><div class="strip_b">News Articles in the Database</div><br /><br />
           
            <div class="strip210" style="text-align:center;">
            <table id="TableHeading10" border="1">
                                     	<tr>
                                        <th width="45%">Article Heading</th>
                                        <th width="30%">Date Posted</th>
                                        <th >Action</th>
                                        </tr>
                                        </table>
                                        </div>
                                   
                             					    <div id="Table-Container10">
                                                    <table border="1" bordercolor="#999">
                                                    <?php foreach($sagana['news'] as $mem1){ ?>
              <tr> <td width="45%" height="30px" style="text-indent:10px;"><?php echo $mem1->news_head?></td>	
              <td width="30%" height="30px" style="text-indent:10px;"><?php echo $mem1->time_posted?></td>
              <td ><center><a href="admin.php?action=del_news&ID=<?php echo $mem1->ID?>">Remove</a> |
               <a href="admin.php?action=edit_article&ID=<?php echo $mem1->ID?>">Edit</a></center></td>
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