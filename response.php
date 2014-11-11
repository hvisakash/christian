<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
      <form name="response_frm" method="post" action="" id="response_frm">
        <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
              <label><?php echo $labels['name']?></label><br>
              <input type="text" name="name" id="name"  class="signup-input">
            </div>

            <div class="form_div div2">
              <div class="div2_left">
                <button class="small_button" name="yes" id="yes" value="yes"><?php echo $labels['yes']?></button>
              </div>
              <div class="div2_right">
                <button class="small_button" name="no" id="no" value="no"><?php echo $labels['no']?></button>
              </div>
              <div class="div2_center">
                <label>
                <?php echo $labels['is_there_objects_that_could_be_from the_shop']?>
                </label>
                <textarea name="comment" id="comment"  class="signup-input" placeholder=""></textarea>
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
                <label>
                  <?php echo $labels['is_there_objects_that_could_be_from the_shop']?>
                </label>
                <textarea name="comment" id="comment"  class="signup-input" placeholder=""></textarea>
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