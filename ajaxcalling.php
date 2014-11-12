<?php 
if(isset($_POST['save'])){
echo $result=$_POST['save']; die("Hello Braj");

include("connection.php");
echo json_encode($result);
}
?>