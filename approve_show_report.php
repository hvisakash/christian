<?php
include 'include/header.php';
echo "<pre>";print_r($labels);die("sss");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Godkende Show Rapport</div>
    <div class="main_div">
    <label class="copyright">Rapporter Afventer Godkendt</label>
         <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5">
            
            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="VIS ALLE"></td>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="VIS EG GODKJENT"></td>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="VIS GODKJENTE"></td>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="ANTALL RAPPORTER"></td>
            </tr>
          </table>
          </form>
        </div>
         <label class="copyright">reporter skal vises , si de er hurtige fe superbruger at risse igennem</label>
        </div>
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
