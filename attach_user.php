<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("dd");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['super_user_assign_user'];?></div>
    <div class="main_div">
        <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5" class="div2_center">
            <tr>
              <td><?php echo $labels['new_user'];?></td>
              <td><select name="existing_user"><option value="eksisterende"><?php echo $labels['existing_user'];?></option></select></td>
            </tr>
            <tr>
              <td><?php echo $labels['name'];?></td>
              <td><input type="text" name="name_of_company" id="name_of_company"></td>
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
              <td><input type="password" name="password" id="password"></td>
            </tr>

           
			 <tr>
              
              <td><input type="checkbox" name="password" id="password"></td>
              <td><?php echo $labels['assign_user'];?></td>
            </tr>
			 
             <tr>
                <td><label class="copyright"><?php echo $labels['assign_user_to_find_customers'];?></label></td>
             </tr>
             
             <tr>
              <td><select name="existing_user"><option value="eksisterende"><?php echo $labels['existing_user'];?></option></select></td>
            </tr>
            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['create_link'];?>"></td>
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
