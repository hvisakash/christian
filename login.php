<?php
include 'include/header.php';
if(isset($_REQUEST['submit'])){
  $_SESSION['customer_name']=$_REQUEST['select_customer'];
  header('Location:signup.php');
}

//Retreving all customer form customer table for showing it into database
$sql_customer_name="select customer_name from alog_customer";
$result_customer_name=mysql_query($sql_customer_name);

?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
      <form name="response_frm" method="post" action="" id="response_frm">
        <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
              <label><?php echo $labels['customer_name']?></label><br>
                <select name="select_customer" id="select_customer" class="midium_select"> 
                    <?php
                      while($row_customer_name=mysql_fetch_array($result_customer_name)){ 
                    ?>
                      <option><?php echo $row_customer_name['customer_name']?></option>
                    <?php
                      }
                    ?>
                </select>

                 <input type="submit" value="Start" name="submit" class="signup-button">
            </div>

          </div>
        </div>
      </form>
  </div>
</div>
  
<?php
include 'include/footer.php';
?>