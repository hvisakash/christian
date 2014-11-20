<?php
include 'include/header.php';
require_once 'connection.php';
//Select Customer for Who Access Guard
	$select="select * from alog_customer";
	$result=mysql_query($select);
	
//Create Guard Functionality	
    if(isset($_POST['create_guard'])){
		//Check If All Input Field Are Empty At The Time Of Guard Creation 
		if(($_POST['name']and $_POST['surname']and $_POST['email']and $_POST['password']and $_POST['select_customer']!=NULL)){
	    $sql="insert into alog_guard(name,surname,email,password,customer_id) values('".$_POST['name']."','".$_POST['surname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['select_customer']."')";
	
		//If Successfully Guard Created	
			if(mysql_query($sql)){ 
				
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
    <div class="main_div" >
        <div class="first_section" >
          <form name="create_guard_first" id="create_guard_first" action="" method="POST" class="guard">
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
              <td>
              <select name="select_customer">
              <option value=""><?php echo $labels['select_customer'];?></option>
            <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
               <?php while($name=mysql_fetch_array($result))
			   {?>
               <option value="<?php echo $name['id']?>" id="<?php echo $name['id'];?>"><?php echo $name['name'];?></option>
               <?php }?>
              </select></td>
            </tr>
            <tr>
              <td><input class="customer_button" name="create_guard" id="create_guard" type="submit" value="<?php echo $labels['create'];?>"></td>
              <td></td>
            </tr>
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
