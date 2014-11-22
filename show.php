<?php
include'connection.php';	

//Functionality  Of show all report record				
if(isset($_POST['show_all'])){
$sql="SELECT * FROM alog_response";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

echo json_encode($row);
}		

//Functionality  Of delete selected report record				
if(isset($_POST['id'])){
	print_r($_POST['id']);die("sss");
$sql="SELECT * FROM alog_response";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

echo json_encode($row);
}					 
?>