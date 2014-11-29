<?php
include 'include/header.php';
if(isset($_SESSION['customer_name'])){
   session_destroy();
}

//Retreving all customer form customer table for showing it into database
$sql_customer_name="select * from alog_company";
$result_customer_name=mysql_query($sql_customer_name);
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Logout</div>
      <form name="response_frm" method="post" action="" id="response_frm">
        <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
              <label>Are You Sure? Logout</label><br>
                 <input type="submit" value="Logout" id="go"  name="submit" class="signup-button">
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
	  alert("dd");
   	 window.location = 'login.php';
   });
});
</script>