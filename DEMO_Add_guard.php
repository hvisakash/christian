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
        
          <form name="create_guard_first" id="create_guard_first" action="" method="POST" class="guard">
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
              <td><input type="text" name="customer_name" id="customer_name"/></td>
              <td><input type="hidden" name="customer_id" id="customer_id"/></td>
              <td><button class="customer_button" name="reset" id="reset" >reset</button> </td>
            </tr>
            <tr>
              <td><input class="customer_button" name="create_guard" id="create_guard" type="submit" value="<?php echo $labels['create'];?>"></td>
              <td></td>
            </tr>
          </table>
          </div>
          </div>
          <div class="table select_customer" style="text-align:">
           <table>
           		<tr>
              <td>
              <select name="select_customer" id="select_customer" onchange="getValue(this);">
              <option value=""><?php echo $labels['select_customer'];?></option>
            <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
               <?php while($name=mysql_fetch_array($result))
			   {?>
               <option value="<?php echo $name['id']?>" id="<?php echo $name['id'];?>"><?php echo $name['name'];?></option>
               <?php }?>
              </select></td>
            </tr>	
           </table>
          </div>
          </form>
       
        </div>
       </div>
    </div>
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
<script>
//function rset()
   //  {  
	///	document.getElementById('customer_name').reset();
    // }
function getValue(ele)
	{
		//select text=name from selecting option 
		var values= $("#select_customer option:selected").html();
		//select value=id from selecting option
		var id = document.getElementById('select_customer').value;
		//Assign value textfield_1=name from selecting option
		document.getElementById('customer_name').value=values;
		//Assign value textfield_2(Type=='hidden')=id from selecting option
		document.getElementById('customer_id').value=id;
		document.getElementById('my').value=id;
		
	}
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
	  //alert("braj");
    $('#customer_name').reset();
  });
});
</script>
