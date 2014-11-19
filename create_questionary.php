<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("HELLO");
?>

<div id="vis-holder"> 
    <div class="vis">
    <div class="mod-title">Skabe Questionary</div>
     <form name="response_frm" method="post" action="" id="create_questionary_frm">
    <div class="main_div" align="center">
         <div class="form_div div2">
              <div class="div2_left">
                <button class="small_button" name="yes" id="yes" value="yes">JA</button>
              </div>
              <div class="div2_right">
                <button class="small_button" name="no" id="no" value="no">NEJ</button>
              </div>
              <div class="div2_center" align="center">
               <!--<label>
               Valgfri Tekst
                </label>--->
                <textarea name="comment" id="comment"  class="signup-input" placeholder="Valgfri Tekst"></textarea>
           
         </div>
          <div class="fotter_button2">
           <input class="signup-button1" type="button" name="submit"  value="Gem/Ny" />
          </div>
      </div>
    </div>  
    </form>      
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
