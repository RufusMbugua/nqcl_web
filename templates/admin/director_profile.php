<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/admin/css/basic.css"/>
<link rel="stylesheet" href="templates/admin/css/two_style.css"/>
<link rel="stylesheet" href="templates/admin/css/more_news.css">
<title>NQCL Staff Profiles</title>
</head>

<script language="JavaScript" type="text/javascript">
window.history.forward(0);
</script>

<style type="text/css">
.close{
	float:right;
	height:50px;
	width:50px;
	margin-right:0px;
	background-color:#CF0;
	background-image:url(templates/admin/images/close.png);
}
.close:hover{
	background-image:url(templates/admin/images/close_.png);
	cursor:pointer;
}

</style>

<body>


<div class="a">
	<div class="inner_a">
    	<a href="admin.php?action=about"><div class="close"></div></a>
       
       <div class="msg_time"></div>
       
       <div class="close_mgs">Close</div>
       
    </div>
</div>

<div class="message_container">
	<div class="a1">add the director to the database<font style="color:#00a460;"></font></div>
    
    <div class="msg_body"> 
    
    	 <form enctype="multipart/form-data" method="post" action="#">
            
                    <div class="box1" style=" height:245px;">
                         <div class="pass_pic">
                            <img id="imager" />
                         </div>
                         
                    <input type="file" class="text" placeholder="Search File" name="imagepath" 
                    style="margin-top:10px; border-color:transparent; width:190px;" onChange="readURL(this);" />   
                    </div>
                    
                    <div class="box2" style="background-color:#f9f9f9; width:420px; margin-left:20px; height:142px; text-align:left;">
                        
                        <p>DIRECTOR'S NAME:<input type="text" class="text" style= 
                        "width:270px; float:right; height:25px; color:#00a460; font-size:14px;
                         margin-top:0px;" 
                         name="name" placeholder="Enter Name here..."/></p>
                        
                                                
                        <p> <input type="submit" class="submit" style="width:200px;  float:right; margin-right:0px;
                         margin-top:10px;" name="send" value="Save Changes" /></p>
                         <br /><br />
        
                    </div>
                    
                            
                            
            </form>
    
    
    
    </div>
<br />
	

</div>


</body>
</html>