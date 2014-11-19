<?php
include 'include/header.php';
//echo"<pre>";print_r($labels);die("tt");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['overview'];?></div>
     <form method="post" action="" class="">
       <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div2">
             <div class="div2_left">
             	<select name="select_guard">
                    <option value="Kunde"><?php echo $labels['customer'];?></option>
                    <option value="opret"><?php echo $labels['create'];?></option>
                    <option value="rediger"><?php echo $labels['edit'];?></option>
                    <option value="opret ekstra bruger"><?php echo $labels['create_additional_user'];?></option>
                    <option value="find kunde"><?php echo $labels['find_customer'];?></option>
                </select>
             </div>
             <div class="div2_center"><br/>
             	<select name="select_guard">
                    <option value="Vagt"><?php echo $labels['guard'];?></option>
                    <option value="opret"><?php echo $labels['create'];?></option>
                    <option value="rediger"><?php echo $labels['edit'];?></option>
                </select>
             </div>
             <div class="div2_right">
             	<select name="select_guard">
                    <option value="Godkend"><?php echo $labels['approve'];?></option>
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
