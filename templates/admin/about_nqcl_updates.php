<?php
  ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="img/x-icon" href="templates/user/logo/top_logo.png"/>
<link rel="stylesheet" href="templates/admin/css/basic.css"/>
<link rel="stylesheet" href="templates/admin/css/two_style.css"/>
<link rel="stylesheet" href="templates/admin/css/more_news.css">
<script type="text/javascript" src="templates/admin/js/jQuery-1.7.2-min.js"></script>
<title>NQCL News Updates</title>

        <script type="text/javascript" src="templates/admin/ckeditor/ckeditor.js" ></script>
        <script type="text/javascript">
            window.onload = function() {
                CKEDITOR.replace('workspace', { height: '250px', width: '990px', uiColor: '#cccccc' });
            }
        </script>

</head>

<!--
<script language="JavaScript" type="text/javascript">
window.history.forward(0);
</script>-->

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
        <a href="admin.php?action=mails"><div class="close"></div></a>
       
       <div class="msg_time">UPDATE YOUR CMS CONTENT HERE</div>
       
       <div class="close_mgs">Close</div>
       
    </div>
</div>

<div class="message_container">
    <div class="a1">view or make appropriate changes in the displayed data<font style="color:#00a460;"></font></div>
    
    <div class="msg_body">
    
            <form  action="admin.php?action=cms_changes_2" method="post">
            
                            CONTENT NAME: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="text" 
                            style= "width:450px; height:23px; margin-top:10px; color:#00a460; font-size:14px;" 
                             name="about_type" readonly="readonly" value="<?php echo $saga_xx['news_xx']->about_type ?>" />
                            <br /><br />
                            
                            <textarea class="ckedior" id="workspace" name="about_body">
                                <?php
                                    echo $saga_xx['news_xx']->about_body
                                ?>
                            </textarea>
                            <input type="hidden" name="ID" value="<?php echo $saga_xx['news_xx']->ID ?>" />
                            
                            
                            <input type="submit" class="submit" style="width:300px;  float:right; margin-right:0px;
                            margin-top:10px;" name="send" value="Save Changes" />
            </form>
    
    
    
    </div>
<br />
    

</div>


</body>
</html>