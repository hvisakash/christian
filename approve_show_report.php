<?php
include 'include/header.php';
//Functionality Of Show All Responses
 					$sql="select * from alog_response;";
					$result=mysql_query($sql);

//Functionality Of Show Confirm Responses
					$sql1="select * from alog_response where response='1';";
					$confirm=mysql_query($sql1);
					
//Functionality Of Show Approve Responses
 if(isset($_POST['show_approve'])){
die("aa");					
					$sql="select * from alog_response;";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);					
					
	

                 }


//Functionality Of Number Of Report Responses
 if(isset($_POST['Number_of_report'])){

					$sql="select * from alog_response;";
					$result=mysql_query($sql);
					$row=mysql_num_rows($result);					
					$row1=mysql_num_rows($result);
	

                 }
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['approve_show_report'];?></div>
     <div class="main_div" align="center">
           <table cellpadding="5" cellspacing="5">
            <tr>
              
              <td><input class="customer_button"  name="show_all" id="show_all" type="submit" value="<?php echo $labels['show_all'];?>"></td>
              <td><input class="customer_button" name="show_confirm" id="show_confirm" type="submit" value="<?php echo $labels['show_i_confirm'];?>"></td>
              <td><input class="customer_button" name="show_approve" id="show_approve" type="submit" value="<?php echo $labels['show_approve'];?>"></td>
              <td><input class="customer_button" name="Number_of_report" id="Number_of_report" type="submit" value="<?php echo $labels['number_of_reports'];?>"></td>
            </tr>
          </table>
          
         <div align="center" class="Show_All" >
          
            <form name="show_response" method="post"  class="customer">
  <table  align="center" border="1" cellpadding="5" cellspacing="5"   bordercolor="#0099FF">
            <tr>
            <td>Employee Name</td>
            <td>Date</td>
          
            <td>Confirm</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            
           
            <?php
			
			While($row=mysql_fetch_array($result))
			{
			 ?>
              <tr>
            <td><?php echo $row['employee_name']?></td>
            <td><?php echo $row['date']?></td>
            <?php if ($row['response']=='0')
			{?>
				<td><a href="show_report_functionality.php?confirm_id=<?php echo $row['id']?>&&value=1" class="customer_button">Not Confirm</a></td>
			<?php }else{?>
				<td><a href="show_report_functionality.php?confirm_id=<?php echo $row['id']?>&&value=0"> Confirm</a></td>
				<?php }
			?>
            <td><a href="show_report_functionality.php?Edit_id=<?php echo $row['id']?> " >Edit</a></td>
            <td><a href="show_report_functionality.php?delete_id=<?php echo $row['id']?>">Delete</a></td>
           
            </tr>
             <?php } ?>
            </table>
			</form>  
            
            
         </div>
          <div align="center" class="Confirm" >
          <form name="show_response" method="post"  class="customer">
  <table  align="center" border="1" cellpadding="5" cellspacing="5"   bordercolor="#0099FF">
            <tr>
            <td>Employee Name</td>
            <td>Date</td>
          
            <td>Confirm</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            
            <?php
			
			While($rows=mysql_fetch_array($confirm))
			{
				
			 ?>
              <tr>
            <td><?php echo $rows['employee_name']?></td>
            <td><?php echo $rows['date']?></td>
            	<td><a href="show_report_functionality.php?confirm_id=<?php echo $rows['id']?>&&value=1" class="customer_button"> Confirm</a></td>
			
			<td><a href="show_report_functionality.php?Edit_id=<?php echo $rows['id']?> " >Edit</a></td>
            <td><a href="show_report_functionality.php?delete_id=<?php echo $rows['id']?>">Delete</a></td>
           
            </tr>
             <?php } ?>
            </table>
			</form> 
          </div>
       </div>   
    </div>        
  </div>
</div>
<?php
include 'include/footer.php';
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery_1.6.1.js"></script>
<script type="text/javascript">
//show all recode 
$(document).ready(function() {
$(".Show_All").hide();
$(".Confirm").hide();	
$("#show_all").click(function(){
$(".Show_All").show();
$(".Confirm").hide();
});
$("#show_confirm").click(function(){
	$(".Show_All").hide();
$(".Confirm").show();
});
    });


</script>