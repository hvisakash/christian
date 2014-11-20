<?php
include 'include/header.php';
//echo"<pre>";print_r($labels);die("ss");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['search_customer'];?></div>
     <form method="post" action="" class="">
       <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
             <div class="div2_left">
                <select name="customer_choice">
                    <option value="Valg Kunde"><?php echo $labels['customer_choice'];?></option>
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
