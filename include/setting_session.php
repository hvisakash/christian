<?php
//starting session
session_start();
$actual_link = "$_SERVER[REQUEST_URI]";
if(strpos($actual_link,"response")) 
  $_SESSION['page_id']="2";
else if(strpos($actual_link,"signup"))
 $_SESSION['page_id']="1";
else if(strpos($actual_link,"login"))
  $_SESSION['page_id']="3";
else if(strpos($actual_link,"create_customer"))
  $_SESSION['page_id']="4";
else{
	echo "<script>alert('There is no page like this in database');</script>";
	header('Location: index.php');
}
?>