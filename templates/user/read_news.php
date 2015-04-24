<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/admin/css/basic.css"/>
<link rel="stylesheet" href="templates/admin/css/two_style.css"/>
<link rel="stylesheet" href="templates/user/css/more_news.css">
<title>NQCL News Updates</title>
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
	background-image:url(templates/user/images/close.png);
}
.close:hover{
	background-image:url(templates/user/images/close_.png);
	cursor:pointer;
}

</style>

<body>


<div class="a">
	<div class="inner_a">
    	<a href="index.php?action=news"><div class="close"></div></a>
       
       <div class="msg_time">POSTED ON: &nbsp;&nbsp;<?php echo $saga['news']->time_posted?></div>
       
       <div class="close_mgs">Close</div>
       
    </div>
</div>

<div class="message_container">
	<div class="a1">article heading:&nbsp;&nbsp;<font style="color:#00a460;"><?php echo $saga['news']->news_head ?></font></div>
    
    <div class="msg_body"><?php echo $saga['news']->news_body ?></div>
<br />
	

</div>


</body>
</html>