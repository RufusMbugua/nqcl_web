<?php
  ob_start();
?>

<?php if (isset($_SESSION['administrator'])){?>
<div id="fade"></div>
<div id="housepanel"> 
	<div class="stripxx"><div id="closeButton">x</div></div>
    	
             <div id="map_canvas">
             	                	
                    <div class="my_details">
                    <form method="post" action="admin.php?action=editprofile">
                    	<input type="text" class="text" readonly="readonly" style="float:left; margin-left:5px; width:320px;
                        background-color:#FFC; height:25px;" 
           				 name="ID" value="<?php echo $_SESSION['administratorID'] ?>"/>
                         
                         <input type="text" class="text" style="margin-top:11px;float:left; margin-left:5px; width:50px; height:25px;" 
           				 name="title" value="<?php echo $_SESSION['admin0'] ?>"/>
                        
                    	<input type="text" class="text" style="margin-top:11px;float:left; margin-left:5px; width:120px; height:25px;" 
           				 name="f_name" value="<?php echo $_SESSION['admin1'] ?>"/>
                         
                         <input type="text" class="text" style="margin-top:11px; float:left; margin-left:5px; width:120px; height:25px;" 
           				 name="l_name"  value="<?php echo $_SESSION['admin2'] ?>"/>
                         
                         <input type="email" class="text" style="margin-top:11px; float:left; margin-left:5px; width:320px; height:25px;" 
           				 name="email"  value="<?php echo $_SESSION['admin3'] ?>"/>
                         
                         <input type="text" class="password" style="margin-top:11px; float:left; margin-left:5px; width:320px; height:25px;" 
           				 name="password" placeholder="Change password here..." required="required"/> 
                        
                        <input type="submit" class="submit" style="width:200px;  float:left; margin-left:75px; margin-top:25px;
                        " name="save" value="Save Changes" />
                     
                     </form>   
                    </div>
             </div>
        	
    </div>
</div> 

<?php }?>