<?php
  ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/admin/icons/top_logo.png"/>
<link rel="stylesheet" href="templates/admin/css/one_style.css"/>
<title>NQCL | Admin Login</title>
</head>

<body>

<div class="wrapper">
	
    <div class="login">
    
    	<div class="logobox"><center><img src="templates/admin/icons/web_foota_id.png"/></center></div>
    
    	<form method="post" action="admin.php?action=login">
            	
                 
                 <input type="email" class="text" name="mail_address" required="required" placeholder="Email"
                 style=" height:40px; width:300px; float:left; margin-left:87.5px; margin-top:50px;"/>
                 
                 <input type="password" class="text" name="password" required="required" placeholder="Password"
                 style=" height:40px; width:300px; float:left;margin-top:25px; margin-left:87.5px;"/>
                                 
                <?php if(isset($errormessage)){?>
					<div class ="error"><?php echo $errormessage;?> </div>
				<?php }?>
                                        
                 <input type="submit" class="submit" name="sender" value="SUBMIT" 
                 style=" width:300px; margin-top:20px; margin-left:90.5px;"/>
                 
                 <p><center><a href="#">Forgot your password?</a></center></p>
          </form> 
    </div>
 
</div>

</body>
</html>

<?php //session_destroy() ?>