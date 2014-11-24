<?php 
include 'connection.php';
if(isset($_GET['id']))
{
	$sql="delete from alog_response where id='".$_GET['id']."'";
	mysql_query($sql);
	header('location: approve_show_report.php');
}
?>