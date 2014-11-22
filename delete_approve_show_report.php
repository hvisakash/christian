<?php 


if(isset($_POST['id'])){
 include 'connection.php';
	$sql="delete from alog_response where id='".$_POST['id']."'";
	mysql_query($sql);
	header('location: approve_show_report.php');
}
?>