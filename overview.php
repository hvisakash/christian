<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Oversigt</div>
     <form method="post" action="" class="">
       <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div2">
             <div class="div2_left">
             	<select name="select_guard">
                    <option value="Kunde">Kunde</option>
                    <option value="opret">opret</option>
                    <option value="rediger">rediger</option>
                    <option value="opret ekstra bruger">opret ekstra bruger</option>
                    <option value="find kunde">find kunde</option>
                </select>
             </div>
             <div class="div2_center"><br/>
             	<select name="select_guard">
                    <option value="Vagt">Vagt</option>
                    <option value="opret">opret</option>
                    <option value="rediger">rediger</option>
                </select>
             </div>
             <div class="div2_right">
             	<select name="select_guard">
                    <option value="Godkend">Godkend</option>
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
