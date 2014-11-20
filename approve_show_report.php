<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("sss");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['approve_show_report'];?></div>
    <div class="main_div">
    <label class="copyright"><?php echo $labels['reports_pending_approved'];?></label>
         <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5">
            
            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['show_all'];?>"></td>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['show_i_confirm'];?>"></td>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['show_approve'];?>"></td>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['number_of_reports'];?>"></td>
            </tr>
          </table>
          </form>
        </div>
         <label class="copyright"><?php echo $labels['reporter_to_appear_they_are_quick_fairy_superuser_to_Risse_through'];?></label>
        </div>
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
