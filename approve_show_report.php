<?php
include 'include/header.php';
/*
//Functionality Of Show All Responses
 if(isset($_POST['show_all'])){

					include'connection.php';					
					$sql="select * from alog_response;";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);
					//$row=mysql_num_rows($result);
					//print_r($row);die;
										
				}
*/

//Functionality Of Show Confirm Responses
 if(isset($_POST['show_confirm'])){

					include'connection.php';					
					$sql="select * from alog_response;";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);					
					
	

                 }


//Functionality Of Show Approve Responses
 if(isset($_POST['show_approve'])){

					include'connection.php';					
					$sql="select * from alog_response;";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);					
					
	

                 }


//Functionality Of Number Of Report Responses
 if(isset($_POST['Number_of_report'])){

					include'connection.php';					
					$sql="select * from alog_response;";
					$result=mysql_query($sql);
					$row=mysql_num_rows($result);					
					
	

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
         <div align="center" >
            <form name="show_response" method="post" action="" class="customer">
  <table class="show_all" align="center" border="1" cellpadding="5" cellspacing="5" align="center"  bordercolor="#0099FF">
            <tr></tr>
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
$("#show_all").click(function(){
	var id = "id";
    var data = 'show_all=' + id;
	 $.ajax({
			type: "POST",
			url: "show.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
					   $('.show_all tr').after('<tr><td>Employee Name</td><td>Date</td><td>Reponse</td><td>Confirm</td><td>Edit</td><td>Delete</td><tr></tr><tr><td>'+data.employee_name+'</td><td>'+data.date+'</td><td>'+data.response+'</td><td><button class="customer_button">Confirm</button></td><td><button class="customer_button" id="edit" value="'+data.id+'">Edit</button></td><td><a href="delete_approve_show_report.php?id='+data.id+'">Delete</a></td></tr>');
			}
			}); 
	
    });





//delete record 
$("#delete").click(function(){
	var id = $(this).attr(value);
    var data = 'id=' + id;
	alert(data);
	 $.ajax({
			type: "POST",
			url: "show.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
					  location:reload;
				  }
			}); 
	});
	
	//Edit Report -Record 
$("#edit").click(function(){
	var id = $(this).attr(value);
    var data = 'id=' + id;
	 $.ajax({
			type: "POST",
			url: "show.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
					   $('.show_all tr').after('<tr><td>Employee Name</td><td>Date</td><td>Reponse</td><td>Confirm</td><td>Edit</td><td>Delete</td><tr></tr><tr><td><input type="text" value="'+data.employee_name+'" name="employee_name"/></td><td>'+data.date+'</td><td>'+data.response+'</td><td><button class="customer_button">Confirm</button></td><td><button class="customer_button">Edit</button></td><td><button class="customer_button">Delete</button></td></tr>');
			}
			}); 
	});

</script>