<?php
//Functionality OF Company Profile At The Time Create Customer 
if(isset($_POST['name_of_person'])){
die("aa");
    $name_of_company=$_POST['name_of_company'];
    $address=$_POST['address'];
    $name_of_person=$_POST['name_of_person'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert_instruction=$_POST['insert_instruction'];
    
   
 include 'connection.php';
    $sql = "INSERT INTO `alog_company`(`name_of_company`, `address`, `name_of_contact_person`, `email`, `password`, `insert_instruction`) VALUES ('$name_of_company', '$address', '$name_of_person', '$email', '$password', '$insert_instruction')";
    $result = mysql_query($sql) or die(mysql_error());
        if($result){
            echo("Data Input OK");
       
        }
        else{
            echo("Data Input Failed");
        }
      return true;
    }
	


?>