<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("HELLO");
require_once 'connection.php';
		
		
		

?>
   
<div id="vis-holder"> 
    <div class="vis">
     <div class="mod-title"><?php echo "Login Guard";?></div>
    <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
        }
      ?>
    <form method="post" action="" class="form1 select_guard">
                <br />
                
             
         <select name="select_guard" id="select_guard" onchange="redirect(this.value)" >
            	<option value="Select Guard"><?php echo "Customer Name"; ?></option>
                 <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
     <?php $select="SELECT customer_id FROM alog_guard";$result = mysql_query($select);while($num_rows = mysql_fetch_array($result)){
		
		$query="select * from alog_company where id='".$num_rows['customer_id']."'";
		$row=mysql_query($query);
		while($rr=mysql_fetch_array($row)){?>
<option value="<?php echo $rr['id']?>" id="<?php echo $rr['id'];?>"><?php echo $rr['name_of_company'];?></option>
		<?php } }
		 ?>
	            
              
            </select> 
        
      </form>  
  </div>
</div>  
<?php
include 'include/footer.php';
?>
<script type="text/javascript">
<!----Functionality Of Redirect To Approve_show_report(Approve) Page -----> 
function redirect(page)
{
   
		//alert(page);
         window.location = 'create_maindata.php?id='+page+'';
  
}
    </script>
