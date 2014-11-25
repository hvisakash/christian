<?php
include 'include/header.php';
include 'connection.php';
 
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['search_customer'];?></div>
    
          <div class="form_container">
            <div class="form_div div1">
             <div class="div2_left">
              <form method="post" action="" class="form_search">
                <select name="customer_choice" id="customer_choice">
                    <option><?php echo $labels['customer_choice'];?></option>
                  <?php  $sql="select * from alog_company";$result=mysql_query($sql);while($rr=mysql_fetch_array($result)){ ?>
                  <option value="<?php echo $rr['id'];?>" id="<?php echo $rr['id'];?>"><?php echo $rr['name_of_company'];?></option>
                <?php } ?>
                </select>
                 </form> 
            </div>
           <div class="div2_right right" >
           <form method="post" action="" class="form_customer">
           		<table cellpadding="5" cellspacing="5">
                    <tr>
						<td><?php echo $labels['name'];?></td>
                        <td><input type="text" name="name" id="name"/> </td>
                    </tr>
                    <tr>    
                        <td><?php echo $labels['address'];?></td>
                        <td><input type="text" name="address" id="address" /></td>
                    </tr>
                    <tr>    
                      <td><?php echo $labels['contact_person'];?></td>
                      <td><input type="text" name="contact_person"  id="contact_person"/></td>
                    </tr>
                    <tr>    
                        <td><?php echo $labels['email'];?></td>
                        <td><input type="text" name="email" id="email" /></td>
                    </tr>
                    <tr>
                        <td><?php echo $labels['password'];?></td>
                        <td><input type="password" name="password" id="password" /></td>
                     </tr>
                     <tr>   
                        <td><?php echo $labels['insert_instruction'];?></td>
                        <td><input type="textarea" name="insert_instruction" id="insert_instruction" /></td>
                     </tr>
                </table>
                </form> 
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
<script type="text/javascript" src="jquery_1.6.1.js"></script>
<script type="text/javascript">
<!---this jquery function get value in text field through select existing user--->
$(document).ready(function(){
$("select#customer_choice").change(function(){
    var id = $("select#customer_choice option:selected").attr('value');
    var data = 'id=' + id;
	 $.ajax({
			type: "POST",
			url: "ajax_search_customer.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
			 $('#name').val(data.name_of_company);
			 $('#address').val(data.address);
			 $('#contact_person').val(data.name_of_contact_person);
			 $('#email').val(data.email);
			 $('#password').val(data.password);
			 $('#insert_instruction').val(data.insert_instruction);
			}
			}); 
	
    });
});
</script>	
