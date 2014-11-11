<script>
function mysubmit() {
    $('#create_customer_first').submit(function(event) { //Trigger on form submit
        $('#name + .throw_error').empty(); //Clear the messages first
        $('#success').empty();

            //Validate fields if required using jQuery

       var values = { //Fetch form data
        'name'  : $('input[name=name_of_company]').val(),
		'address'  : $('input[name=address]').val(),
			'name_of_person'  : $('input[name=name_of_person]').val(),
			//'email'  : $('input[name=email]').val(),
		'password'  : $('input[name=password]').val(),
			'insert_instruction'  : $('input[name=insert_instruction]').val() //Store name fields value
        };
// var values = $(this).serialize();
        $.ajax({ //Process the form using $.ajax()
            type        : 'POST', //Method type
            url         : 'ajaxcalling.php', //Your form processing file url
            data        : values, //Forms name
            dataType    : 'json',
            success     : function(data) {

            if (!data.success) { //If fails
                if (data.errors.name) { //Returned if any error from process.php
                    $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                }
            } else {
                    $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                }
            }
        });
        event.preventDefault(); //Prevent the default submit
    });
 };
</script>
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
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="Save"></td>
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
                <td><input type="text" name="start_time" id="start_time"></td>
              </tr>

              <tr>
                <td>End Time:</td>
                <td><input type="text" name="end_time" id="end_time"></td>
              </tr>

              <tr>
                <td>Flight No:</td>
                <td><input type="text" name="flight_no" id="flight_no"></td>
              </tr>

              <tr>
                <td>Place:</td>
                <td><input type="text" name="place" id="place"></td>
              </tr>

              <tr>
                <td>Comment :</td>
                <td><input type="text" name="comment" id="comment"></td>
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