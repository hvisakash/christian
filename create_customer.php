<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
    <div class="main_div">
        <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST">
          <table cellpadding="5" cellspacing="5">
            <tr>
              <td>Name of Company</td>
              <td><input type="text" name="name_of_company" id="name_of_company"></td>
            </tr>

            <tr>
              <td>Address</td>
              <td><input type="text" name="address" id="address" ></td>
            </tr>

            <tr>
              <td>Name of Contact Person</td>
              <td><input type="text" name="name_of_person" id="name_of_person"></td>
            </tr>

            <tr>
              <td>Email</td>
              <td><input type="email" name="email" id="email"></td>
            </tr>

            <tr>
              <td>Password</td>
              <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
              <td colspan="2">Enter Insert Instructions</td>
            </tr>

            <tr>
              <td colspan="2">
                <textarea name="insert_instruction" id="insert_instruction" class="customer_textarea">
                </textarea>
              </td>
            </tr>

            <tr>
              <td><input class="customer_button" name="first_section" id="first_section" type="submit" value="Save"></td>
              <td></td>
            </tr>
          </table>
          </form>
        </div>
        <div class="second_section">
          <div style="width:100%;float:left;">
          <input type="button" name="create_schedule" id="create_schedule" class="customer_button" value="Create Schedule">
          <div class="upload_images"></div>
          <div style="width:100%;">
            <input class="customer_button" name="upload_images" id="upload_images" type="submit" value="Upload" style="float:right;margin-top:5px;">
          </div>
        </div>
        </div>
        <div class="third_section">
          <div style="width:100%;float:left;">
            <label>Enter MasteData for Visitian</label>
            <table cellpadding="5" cellspacing="5">
              <tr>
                <td>Start Time:</td>
                <td></td>
              </tr>

              <tr>
                <td>End Time:</td>
                <td></td>
              </tr>

              <tr>
                <td>Flight No:</td>
                <td></td>
              </tr>

              <tr>
                <td>Place:</td>
                <td></td>
              </tr>

              <tr>
                <td>Comment :</td>
                <td></td>
              </tr>
            </table>
            <div style="width:100%;">
            <input class="customer_button" name="create" id="create" type="submit" value="Create" style="float:right;margin-top:5px;">
          </div>
          </div>
        </div>
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>