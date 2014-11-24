<?php 
//Functionality Of select Guard edit At The Time update Guard 
if(isset($_POST['id'])){
	
	 include 'connection.php';
	 $sql="select * from alog_user where id='".$_POST['id']."'";
	 $result=mysql_query($sql);
	 $row=mysql_fetch_array($result);
	 //print_r($row);die("rr");
	echo json_encode($row);
	}
?>