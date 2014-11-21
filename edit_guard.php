<?php
include 'include/header.php';

//FUNCTIONALITY EDIT GUARD 
if(isset($_POST['edit'])){
	
	include 'connection.php';
	$query="update alog_guard set name='".$_POST['name']."',surname='".$_POST['surname']."',email='".$_POST['email']."',password='".$_POST['password']."',customer_id='".$_POST['select_customer']."' where id='".$_POST['id']."'";
	mysql_query($query);
	}

//FUNCTIONALITY DELETE GUARD 
if(isset($_POST['delete'])){
	
	include 'connection.php';
	$query="delete from alog_guard where id='".$_POST['id']."'";
	mysql_query($query);
	}

?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['super_user_guard_edit_delete'];?></div>
   	<form method="post" action="" class="form1 select_guard">
                <br /><?php //Select Guard For 
            $select="select * from alog_guard";
            $result=mysql_query($select);?>
         <select name="select_guard" id="select_guard">
            	<option value="Select Guard"><?php echo $labels['select_guard']; ?></option>
                 <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
               <?php while($name=mysql_fetch_array($result))
			   {?>
               <option value="<?php echo $name['id']?>" id="<?php echo $name['id'];?>"><?php echo $name['name'];?></option>
               <?php }?>
            </select> 
      </form>      
     <form method="post" action="" class="form2 manipulate">
     
                 <div class="esc" align="center">
          <div class="form_container">
            <table cellpadding="5" cellspacing="5" >
                <tr>
                	  <td><input type="hidden" name="id" id="id"/></td>
                </tr>
                <tr>
                	  <td><?php echo $labels['name']; ?></td>
                      <td>
                      <input type="text" name="name" id="name" />
                      </td>
                </tr>
                <tr>
                      <td><?php echo $labels['surname']; ?></td>
                      <td>
                      <input type="text" name="surname" id="surname" value=""/>
                      </td>
               </tr>
               <tr>
                      <td><?php echo $labels['email']; ?></td>
                      <td>
                      <input type="text" name="email" id="email"/>
                      </td>
               </tr>
               <tr>
                      <td><?php echo $labels['password']; ?></td>
                      <td>
                      <input type="text" name="password" id="password"/>
                      </td>
               </tr>
               <tr>
                      <td>
                      <?php 
					        //Select Guard For 
                      		$q="select * from alog_customer";
							$r=mysql_query($q);?>
							<select name="select_customer">
                      
                       <option value="Select customer who access guard"><?php echo $labels['select_customer']; ?></option>
                      	 <?php while($n=mysql_fetch_array($r))
			   {?>
               <option value="<?php echo $n['id']?>" id="<?php echo $n['id'];?>"><?php echo $n['name'];?></option>
               <?php }?>
                      </select>
                      </td>
               </tr>
               <tr>
                      <td>
                      <input class="customer_button" type="submit" name="edit" id="edit" value="<?php echo $labels['edit']; ?>"/>
                      </td>
                      <td>
                      <input class="customer_button" type="submit" name="delete" id="delete" value="<?php echo $labels['delete']; ?>"/>
                      </td>
               </tr>
            </table>
       </div>   
       </div>
     </form> 
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery_1.6.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("select#select_guard").change(function(){
    var id = $("select#select_guard option:selected").attr('value');
    var data = 'id=' + id;
	 $.ajax({
			type: "POST",
			url: "ajax_Edit_guard.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
			 $('#id').val(data.id);
			 $('#name').val(data.name);
			 $('#surname').val(data.surname);
			 $('#email').val(data.email);
			 $('#password').val(data.password);
			}
			}); 
	
    });
});
</script>	