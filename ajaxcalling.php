<?php 

if(is_array($_FILES)) {
	
    include 'connection.php';
		$count=0;
	foreach ($_FILES['upload_images']['name'] as $name => $value)
	{
			
			if(is_uploaded_file($_FILES['upload_images']['tmp_name'][$name]))
			 {
			
					$sourcePath = $_FILES['upload_images']['tmp_name'][$name];
					
					$targetPath = "uploads/".$_FILES['upload_images']['name'][$name];
					
				move_uploaded_file($sourcePath,$targetPath);
					$count=$count + 1;
					 
					
					
							$sql="INSERT INTO `image_tb` (`image_name`, `image_url`) VALUES('$value','$targetPath')";
							
							$row = mysql_query($sql) or die(mysql_error());
					
			}
  }		
	
echo json_encode($row);
	
	
}


/*
if(isset($_FILES['file']['name'])){
	
	include 'connection.php';
$count=0;
foreach($_FILES['file']['name'] as $filename){
	 		
			$path='uploads/';
			$tmp=$_FILES['file']['tmp_name'][$count];
			$path.=$_FILES['file']['name'][$count];
            	$count=$count + 1;
			
			move_uploaded_file($tmp,$path);
			
			$sql="INSERT INTO `image_tb` (`image_name`, `image_url`) VALUES('$filename','$path')";
			//$sql = "INSERT INTO `image_tb`(`image_name`, `image_url`) VALUES('$filename','$path')" or die("Error In Query...!");
			$row = mysql_query($sql) or die(mysql_error());
			if($row){
				echo("Data Input OK");
		   
			}
			else{
				echo("Data Input Failed");
			}
	}
    
	return true;
echo json_encode($row);
}
*/
//CREATE CUSTOMER Name , Company Name , Email , Address
if(isset($_POST['name_of_company'])){
    
    
    $name_of_company=$_POST['name_of_company'];
    $address=$_POST['address'];
    $name_of_person=$_POST['name_of_person'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert_instruction=$_POST['insert_instruction'];
    
    include 'connection.php';
   
    $sql = "INSERT INTO `alog_customer`(`name_of_company`, `address`, `name_of_contact_person`, `email`, `password`, `insert_instruction`) VALUES ('$name_of_company', '$address', '$name_of_person', '$email', '$password', '$insert_instruction')";
    $result = mysql_query($sql) or die(mysql_error());
        if($result){
            echo("Data Input OK");
       
        }
        else{
            echo("Data Input Failed");
        }
      return true;
    }
	
//ALONG USER TABLE Flite _ No	
if(isset($_POST['customer_name'])){
   
   $customer_name=$_POST['customer_name'];
    $start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
    $flight_no=$_POST['flight_no'];
    $place=$_POST['place'];
    $comment=$_POST['comment'];
    //$insert_instruction=$_POST['insert_instruction'];
    
    include 'connection.php';
   
    $sql = "INSERT INTO `alog_user`(`name`, `start_time`, `end_time`, `flight_no`, `place`, `comment`) VALUES ('$customer_name', '$start_time', '$end_time', '$flight_no', '$place', '$comment')";
    $result = mysql_query($sql) or die(mysql_error());
        if($result){
            echo("<br>Data Input OK");
        }
        else{
            echo("<br>Data Input Failed");
        }
    }


?>