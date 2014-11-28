<?php
include 'include/header.php';
require_once 'connection.php';
//Select Customer for Who Access Guard
	$select="select * from alog_customer";
	$result=mysql_query($select);
	
//Create Guard Functionality	
    if(isset($_POST['create_guard']))
    {	
	$sel_id=$_POST['sel_id'];
			//Check If All Input Field Are Empty At The Time Of Guard Creation 
		      if(($_POST['name']and $_POST['surname']and $_POST['email']and $_POST['password']!=NULL)){
			$sql="insert into alog_guard(name,surname,email,password) values('".$_POST['name']."','".$_POST['surname']."','".$_POST['email']."','".$_POST['password']."')";
			mysql_query($sql);
			$guard_id = mysql_insert_id();
			
		foreach($sel_id as $customer_id)
		{
		    $sql="insert into alog_gard_customer_relationship(customer_id,guard_id) values('".$customer_id."','".$guard_id."')";
		    mysql_query($sql);
		}
		//If Successfully Guard Created	
			  if($guard_id)
			    {
					?><script>
					    
					    alert("Record is inserted");
					</script>
					<?php }
		//If There Is Some Problem		
			else{
				}
	    }
   }
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['adding_security'];?></div>
     <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
        }
      ?>
    <div class="main_div" >
        
          <div class="first_section" >
          <div class="table add_guard">
 			<form method="post">
          <table cellpadding="15" cellspacing="5" class='tab'>
            <tr>
              <td><?php echo  $labels['name']?></td>
              <td><input type="text" name="name" id="name"></td>
            </tr>

            <tr>
              <td><?php echo $labels['surname'];?></td>
              <td><input type="text" name="surname" id="surname" ></td>
            </tr>

            <tr>
              <td><?php echo $labels['email'];?></td>
              <td><input type="text" name="email" id="email"></td>
            </tr>

            <tr>
              <td><?php echo $labels['password'];?></td>
              <td><input type="password" name="password" id="password"></td>
            </tr>
            
			<tr>
              <td><?php echo $labels['customer_name'];?></td>
              <td>
              <div align="center" class="cls">
		
             </div>
              </td>
            
            <tr>
              <td><input class="customer_button" name="create_guard" id="create_guard" type="submit" value="<?php echo $labels['create'];?>"></td>
              <td></td>
            </tr>
           </table>
           </form>
          </div>
          
          </div>
         
           <table>
           		<tr>
              <td>
              <select name="select_customer" id="selnm" >
		<option>Customer Name</option>
               <?php while($name=mysql_fetch_array($result))
			   {?>
                <option value="<?php echo $name['id']?>" ><?php echo $name['name'];?></option>
               <?php }?>
              </select></td>
            </tr>	
           </table>
          </div>
        </div>
       </div>
    </div>
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
<script>
$(document).ready(function()
{  
	$("#selnm").change(function()
	{
		var id=$("#selnm option:selected" ).val();
		var value=$("#selnm option:selected" ).text();
		//alert(value);
		$('div.cls').append('<tr class="tr_id" value="'+id+'" id="'+id+'"><td class="para">'+value+'</td><td><input name="remove" value="X" type="button" class="remove" ></td><td><input name="sel_id[]" type="hidden"  value="'+id+'"/></td></tr>');
		$("#selnm option:selected" ).remove();
		
	});

});
</script>
	