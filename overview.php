<?php
include 'include/header.php';
?>

<script type="text/javascript">

<!---Functionality Of Redirect To Customer(create,edit,finde,add new) Page --->

function redirect_customer(page)
{
    if (page == 'create')
    {	 
         window.location = 'create_customer.php';
    }
    else if (page == 'edit')
    {
        window.location = 'edit_customer.php';
    }
	 else if (page == 'create_additional_user')
    {
        window.location = 'attach_user.php';
    }
	 else if (page == 'find_customer')
    {
		window.location = 'search_customer.php';
    }
}

<!----Functionality Of Redirect To Guard(create,edit) Page ----->
function redirect_guard(page)
{
    if (page == 'create')
    {	 
         window.location = 'add_guard.php';
    }
    else if (page == 'edit')
    {
        window.location = 'edit_guard.php';
    }
	
	
}

<!----Functionality Of Redirect To Approve_show_report(Approve) Page -----> 
function redirect_approve(page)
{
    if (page == 'approve')
    {	 
		//alert("HELLO < BRaJ");
         window.location = 'approve_show_report.php';
    }
}
    </script>

<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['overview'];?></div>
     <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
        }
      ?>
     <form method="post" action="" class="">
       <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div2">
             <div class="div2_left">
       <!--Functionality Of Redirect To Customer(create,edit,finde,add new) -->      
             	<select name="select_customer" onchange="redirect_customer(this.value)">
                    <option ><?php echo $labels['customer'];?></option>
                    <option value="create"><?php echo $labels['create'];?></option>
                    <option value="edit"><?php echo $labels['edit'];?></option>
                    <option value="create_additional_user"><?php echo $labels['create_additional_user'];?></option>
                    <option value="find_customer"><?php echo $labels['find_customer'];?></option>
                </select>
             </div>
             <div class="div2_center"><br/>
       <!--Functionality Of Redirect To Guard(create,edit,finde,add new) -->         	
                <select name="select_guard" onchange="redirect_guard(this.value)">
                    <option ><?php echo $labels['guard'];?></option>
                    <option value="create"><?php echo $labels['create'];?></option>
                    <option value="edit"><?php echo $labels['edit'];?></option>
                    </select>
             </div>
             <div class="div2_right">
     <!----Functionality Of Redirect To Approve_show_report(Approve) Page ----->        	
                <select name="select_approve" onchange="redirect_approve(this.value)">
                    <option><?php echo $labels['approve'];?></option>
                    <option value="approve"><?php echo $labels['approve'];?></option>
                </select>
             </div> 
            </div>
          </div>
       </div>
      
     </form> 
    </div>        
  </div>
</div>
<?php
include 'include/footer.php';
?>
