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
  else if(strpos($actual_link,"attach_user"))
  $_SESSION['page_id']="5";
    else if(strpos($actual_link,"approve_overview"))
  $_SESSION['page_id']="6";
  else if(strpos($actual_link,"approve_show_report"))
  $_SESSION['page_id']="7";
  else if(strpos($actual_link,"add_guard"))
  $_SESSION['page_id']="8";
  else if(strpos($actual_link,"overview"))
  $_SESSION['page_id']="9";
  else if(strpos($actual_link,"search_customer"))
  $_SESSION['page_id']="10";
  else if(strpos($actual_link,"edit_guard"))
  $_SESSION['page_id']="11";
  else if(strpos($actual_link,"edit_customer"))
  $_SESSION['page_id']="12";
  else if(strpos($actual_link,"create_questionary"))
  $_SESSION['page_id']="13";
  else if(strpos($actual_link,"ajaxcalling"))
  $_SESSION['page_id']="14";
  else if(strpos($actual_link,"delete_approve_show_report"))
  $_SESSION['page_id']="15";
    else if(strpos($actual_link,"create_maindata"))
  $_SESSION['page_id']="16";
  
else{
	echo "<script>alert('There is no page like this in database');</script>";
	header('Location: index.php');
}
?>