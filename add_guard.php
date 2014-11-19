<?php
include 'include/header.php';
//echo "<pre>";  print_r($labels);die("erere");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['adding_security'];?></div>
    <div class="main_div" >
        <div class="first_section">
          <form name="create_guard_first" id="create_guard_first" action="" method="POST" class="guard">
          <table cellpadding="5" cellspacing="5">
            <tr>
              <td><?php echo  $labels['name']?></td>
              <td><input type="text" name="name_of_company" id="name_of_company"></td>
            </tr>

            <tr>
              <td><?php echo $labels['surname'];?></td>
              <td><input type="text" name="address" id="address" ></td>
            </tr>

            <tr>
              <td><?php echo $labels['email'];?></td>
              <td><input type="text" name="name_of_person" id="name_of_person"></td>
            </tr>

            <tr>
              <td><?php echo $labels['password'];?></td>
              <td><input type="password" name="password" id="password"></td>
            </tr>

 <tr>
              <td>
              <select name="select_customer">
               <option value="customer_name"><?php echo $labels['guard_which_customers_they_should_be_given_access_file'];?></option>
              </select></td>
            </tr>
            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['create'];?>"></td>
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
