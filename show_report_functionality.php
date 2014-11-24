<?php 
include 'connection.php';

//Functionality Of Delte Approve Show Report Record
if(isset($_GET['delete_id']))
{
	$sql="delete from alog_response where id='".$_GET['delete_id']."'";
	mysql_query($sql);
	header('location: approve_show_report.php');
}

//Functionality Of Confirm /Not Confirm Response In Approve Show Report
if(isset($_GET['confirm_id']))
{
	$id=$_GET['confirm_id'];
	$value=$_GET['value'];
	$sql="UPDATE alog_response SET response = '$value' WHERE id = '$id'";
	mysql_query($sql);
	header('location: approve_show_report.php');
}

//Functionality Of Edit Approve Show Report Record
	if(isset($_GET['Edit_id']))
	{   
	    $id=$_GET['Edit_id'];
		$sql="select * from alog_response where id='$id'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		//print_r($row);die("eeee");
		?>
		   <form name="form_edit" method="post" >
				<table align="center">
				 <tr>
					<td><input type="hidden" name="id" value="<?php echo $row['id'];?>"/></td>
				 </tr>
				 <tr>
				   <td>Employee Name</td>
				   <td><input type="text" name="employee_name" value="<?php echo $row['employee_name'];?>"/></td>
				 </tr>
				 <tr>
				   <td>Date</td>
				   <td><input type="text" name="date" value="<?php echo $row['date'];?>"/></td>
				 </tr>
				 <tr>
					<td><input type="submit" class="customer_button" name="edit" value="EDIT"/></td>
				 </tr>
				</table>
			</form>
			
		<?php
	}
	
	if(isset($_POST['edit']))
	{
		$sql="UPDATE alog_response SET employee_name = '".$_POST['employee_name']."', date='".$_POST['date']."'  WHERE id = '".$_POST['id']."'";
		mysql_query($sql);
		header('location: approve_show_report.php');
	}
?>
