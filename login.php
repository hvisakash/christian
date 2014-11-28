<?php
include 'include/header.php';
if(isset($_REQUEST['submit'])){
  $_SESSION['customer_name']=$_REQUEST['select_customer'];
  header('Location:login.php');
}

//Retreving all customer form customer table for showing it into database
$sql_customer_name="select * from alog_company";
$result_customer_name=mysql_query($sql_customer_name);
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['statistics']?></div>
      <form name="response_frm" method="post" action="" id="response_frm">
        <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
              <label><?php echo $labels['customer_name']?></label><br>
                <select name="select_customer" id="select_customer" class="midium_select"> 
               <?php
                     while($row=mysql_fetch_array($result_customer_name))
					{
						 
                    ?>
                      <option value="<?php echo $row['id']?>"><?php echo $row['name_of_company']?></option>
                    <?php
                      }
                    ?>
                </select>

                 <input type="submit" value="<?php echo $labels['start']?>" id="go"  name="submit" class="signup-button">
            </div>

          </div>
        </div>
      </form>
  </div>
</div>
  
<?php
include 'include/footer.php';
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#go").click(function(){
    var a=$('#select_customer').val();
	  //var b=$('#select_customer').text();
	
		 window.location = 'create_maindata.php?id='+a+'';
  alert(a);
   
  });
});
</script>