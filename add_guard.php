<?php
include 'include/header.php';
require_once 'connection.php';
//Select Customer for Who Access Guard
	$select="select * from alog_customer";
	$result=mysql_query($select);
	
//Create Guard Functionality	
    if(isset($_POST['create_guard']))
    {
		//Check If All Input Field Are Empty At The Time Of Guard Creation 
		      if(($_POST['name']and $_POST['surname']and $_POST['email']and $_POST['password']and $_POST['select_customer']!=NULL)){
	           $sql="insert into alog_guard(name,surname,email,password,customer_id) values('".$_POST['name']."','".$_POST['surname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['customer_id']."')";
	
		//If Successfully Guard Created	
			  if(mysql_query($sql))
			    { 
				
					?><script>alert("Record Insert Successfully...!");</script><?php
				}
		//If There Is Some Problem		
			else{
					?><script>alert("Record Is Not Inserted... There Is Some Problem ");</script><?php
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
        
          <form name="create_guard_first"  method="POST" class="guard">
          <div class="first_section" >
          <div class="table add_guard">
          <table cellpadding="15" cellspacing="5">
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
            
            <tr>
              <td><input class="customer_button" name="create_guard" id="create_guard" type="submit" value="<?php echo $labels['create'];?>"></td>
              <td></td>
            </tr>
          </table>
          </div>
          </form>
          <div align="center" class="cls">
            	</div>
          </div>
          <div class="table select_customer" style="text-align:center">
           <table>
           		<tr>
              <td>
              <select name="select_customer" id="selnm" >
                <option><?php echo $labels['customer_name'];?></option>
               <?php while($name=mysql_fetch_array($result))
			   {?>
               <option value="<?php echo $name['name']?>" id="<?php echo $name['id']?>"><?php echo $name['name'];?></option>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{ 
  var count=1;
  $("#selnm").change(function()
		  {
			  
			 var values=$("#selnm").val();
		     {
			$('div.cls').append('<tr><td class="para">'+values+'</td><td><input name="" type="button" value="X" id="demo"/></td><input type="hedden" name=""  value=""></tr>');
			count++;
			}
	   });
	/*$("div.cls").on("click",".para",function(){
					 alert($(this).index());
					 var value =$(this).index();
					//alert(value);
					 value++;
					 $(".para").val(value);
				});
			
	*/

	var id;
	$("#selnm").change(function(e)
	{
		
	    id=this.id;
		alert(id);
	});
	
});

</script>
	