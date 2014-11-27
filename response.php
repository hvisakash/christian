<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
     <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
		 }
      ?>
      <form name="response_frm" method="post" action="" id="response_frm">
        <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
              <br>
              <?php  $text=array_filter($_SESSION['optionalText']); ?>
              <input type="text" name="name" id="name" value="<?php  echo $text[0]?>"  class="signup-input">
            </div>

            <div class="form_div div2">
              <div class="div2_left">
                <button class="small_button" name="yes" id="yes" value="yes"><?php echo $labels['yes']?></button>
              </div>
              <div class="div2_right">
                <button class="small_button" name="no" id="no" value="no"><?php echo $labels['no']?></button>
              </div>
              <div class="div2_center">
             <textarea name="comment" id="comment" value="<?php  echo $text[1]?>" class="signup-input"><?php  echo $text[1]?></textarea>
              </div>
            </div>

            <div class="form_div div2">
              <div class="div2_left">
                <button class="small_button" name="yes" id="yes" value="yes"><?php echo $labels['yes']?></button>
              </div>
              <div class="div2_right">
                <button class="small_button" name="no" id="no" value="no"><?php echo $labels['no']?></button>
              </div>
              <div class="div2_center">
                
                <textarea name="comment" id="comment" value="<?php  echo $text[2]?>"  class="signup-input" ><?php  echo $text[2]?></textarea>
              </div>
            </div>

            <div class="form_div div3">
              <input type="text" class="signup-input" ><br>
              <label><?php echo $labels['signature']?></label>
            </div>

            <div class="form_div fotter_buttons div4">
              <div class="div4_buttons">
                <div class="fotter_button1">
                <input class="signup-button1" type="button" name="submit"  value="<?php echo $labels['back']?>" />
                </div>
                <div class="fotter_button2">
                  <input class="signup-button1" type="button" name="submit"  value="<?php echo $labels['start']?>" />
                </div>
                <div class="fotter_button3">
                  <input class="signup-button1" type="button" name="submit"  value="<?php echo $labels['roof_picture']?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
  </div>
</div>
  
<?php
include 'include/footer.php';
?>