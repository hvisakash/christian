<?php
include 'include/header.php';

//Functionality Of Select All User From alog_user Table
	$sql="select * from alog_user";
	$result=mysql_query($sql);
	
//Functionality Of Create a Link For assign user
   if(isset($_POST['create_link']))
       {
	    
		 $data="update alog_user set name='".$_POST['user_name']."',email='".$_POST['email']."',password='".$_POST['password']."',beheft='".$_POST['beheft']."',customer_id='".$_POST['customer_id']."' where id='".$_POST['id']."'";
		 //print_r($data);die("WW");
		
		 $re=mysql_query($data);
		 
		 header('location: attach_user.php');
	   }	
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['super_user_assign_user'];?></div>
    <div class="main_div" align="center">
      
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5" style="padding:60px;">
            <tr>
              <td><?php echo $labels['new_user'];?></td>
              <td><select name="existing_user" id="existing_user">
                  <option value=""><?php echo $labels['existing_user'];?></option>
                  <?php while($user=mysql_fetch_array($result)){?>
                  <option value="<?php echo $user['id'];?>"><?php echo $user['name'];?></option>
                  <?php }?>
                  </select>
              </td>
            </tr>
            <tr>
              <td><input type="hidden" name="id" id="id"></td>
            </tr>
            <tr>
              <td><?php echo $labels['name'];?></td>
              <td><input type="text" name="user_name" id="user_name"></td>
            </tr>

            <tr>
              <td><?php echo $labels['email'];?></td>
              <td><input type="email" name="email" id="email"></td>
            </tr>

            <tr>
              <td><?php echo $labels['password'];?></td>
              <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
              <td><?php echo $labels['beheft'];?></td>
              <td><input type="text" name="beheft" id="beheft"></td>
            </tr>
			
             <tr><td><?php echo $labels['select_customer'];?></td>
              <td><select name="customer_id">
                    <option value=""><?php echo $labels['select_customer'];?></option>
                    <?php $query="select * from alog_customer";$record=mysql_query($query);while($row=mysql_fetch_array($record)){?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                    <?php }?>
              	  </select>
              </td>
            </tr>
            
            <tr>
              <td><input class="customer_button" name="create_link" id="create_link" type="submit" value="<?php echo $labels['create_link'];?>"></td>
              <td></td>
            </tr>
          </table>
           
          </form>
    
       
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
<!---this jquery function get value in text field through select existing user--->
$(document).ready(function(){
$("select#existing_user").change(function(){
    var id = $("select#existing_user option:selected").attr('value');
    var data = 'id=' + id;
	//alert(data);
	 $.ajax({
			type: "POST",
			url: "ajax_attach_user.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
			 $('#id').val(data.id);
			 $('#user_name').val(data.name);
			 $('#password').val(data.password);
			 $('#email').val(data.email);
			 $('#beheft').val(data.beheft);
			}
			}); 
	
    });
});
</script>	