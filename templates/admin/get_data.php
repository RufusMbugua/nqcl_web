<?php
$q = intval($_GET['q']);

$con = mysql_connect('localhost;dbname=db_nqcl','nqclszjj_nana','nana12345');
				mysql_select_db('db_nqcl');	


if (!$con) {
  die('Could not connect: ' . mysql_error($con));
}

mysql_select_db($con,"db_nqcl");
$sql="SELECT * FROM about WHERE about_type = '".$q."'";
$result = mysql_query($con,$sql);


while($row = mysql_fetch_array($result)) {
 echo $row['about_body'];
}

mysql_close($con);
?>  