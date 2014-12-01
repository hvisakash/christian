<?php
$id=$_REQUEST['id'];
include 'include/header.php';
include 'connection.php';
//echo "<pre>";print_r($labels);die("HELLO");
 $select="SELECT * FROM alog_company where id='$id'";
 $result = mysql_query($select);
 $customer=mysql_fetch_array($result);
?>
   
<div id="vis-holder"> 
    <div class="vis">
     <div class="mod-title"><?php echo $labels['create_maindata'];?></div>
     <div class="first_section">
     
  <label><?php echo $labels['customer_name'];?></label>
      <?php //session_start();
        if(isset($_SESSION['customer_name'])){
			echo $_SESSION['customer_name']=$customer['name_of_company'];
		    //echo $_SESSION['customer_id']=$customer['id'];
		 }
      ?>
      
      <br />
          <form name="create_customer_first" id="create_customer_first" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5">
            <tr>
              <td><?php echo $labels['name_of_company'];?></td>
              <td><input type="text" name="name_of_company" id="name_of_company" value="<?php echo $customer['name_of_company'];?>"></td>
            </tr>

            <tr>
              <td><?php echo $labels['address'];?></td>
              <td><input type="text" name="address" id="address" value="<?php echo $customer['address'];?>" ></td>
            </tr>

            <tr>
              <td><?php echo $labels['contact_person'];?></td>
              <td><input type="text" name="name_of_person" id="name_of_person" value="<?php echo $customer['name_of_contact_person'];?>"></td>
            </tr>

            <tr>
              <td><?php echo $labels['email'];?></td>
              <td><input type="email" name="email" id="email" value="<?php echo $customer['email'];?>"></td>
            </tr>

            <tr>
              <td><?php echo $labels['Password'];?></td>
              <td><input type="password" name="password" id="password" value="<?php echo $customer['password'];?>"></td>
            </tr>

            <tr>
              <td colspan="2"><?php echo $labels['insert_instruction'];?></td>
            </tr>

            <tr>
              <td colspan="2">
                <textarea name="insert_instruction" value="<?php echo $customer['insert_instruction'];?>" class="customer_textarea">
                </textarea>
              </td>
            </tr>

            <tr>
              <td><input class="customer_button"  onclick="redirect(this);" name="first_section" type="button" value="<?php echo $labels['save'];?>"/></td>
              <td></td>
            </tr>
          </table>
          </form>
        </div>
    
  </div>
</div>  
<?php
include 'include/footer.php';
?>
<script type="text/javascript">
function redirect(page)
{
    window.location = 'response.php';
}
    </script>
