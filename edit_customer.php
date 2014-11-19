<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
    <div class="main_div">
        <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
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
              <td><input class="customer_button"  onclick="mysubmit(this);" name="update" id="update" type="submit" value="Update"></td>
              <td></td>
            </tr>
          </table>
          </form>
        </div>
    <div class="second_section">
      <div style="width:100%;float:left;">
	    <input type="button" name="create_schedule" id="create_schedule" class="customer_button" value="Create Schedule">
		<form name="create_customer_second" id="create_customer_second"  method="post" enctype="multipart/form-data" >
         <div class="upload_images">
	   
	      <table cellpadding="5" cellspacing="5">
		
            <tr>
                <td>
                <input type="file" name="upload_images[]"  style="width:197px; height:25px; margin-left: 1px;"/>
                </td>
            </tr>
            <tr>
                <td>
                <input type="file" name="upload_images[]" style="width:197px; height:25px; margin-left: 1px;"/>
                </td>
            </tr>
            
            <tr>
                <td>
                <input type="file" name="upload_images[]" style="width:197px; height:25px; margin-left: 1px;"/>
                </td>
            </tr>
            
            <tr>
                <td>
                <input type="file" name="upload_images[]" style="width:197px; height:25px; margin-left: 1px;"/>
                </td>
            </tr>
	     </table> 
      </div> 
	  <div style="width:100%;">
		<input class="customer_button"  onclick="myupload(this);" name="upload_images" id="upload_images" type="submit" value="Upload" style="float:right;margin-top:5px;">
	  </div>
		   
    </form>
   
    </div> 
   </div>
        <div class="third_section">
          <div style="width:100%;float:left;">
            <label>Enter MasteData for Visitian</label>
	    <form name="create_customer_third" id="create_customer_third" action="" method="POST">
            <table cellpadding="5" cellspacing="5">
               <tr>
                <td>Name :</td>
                <td><input type="text" name="customer_name" id="customer_name"></td>
              </tr>
	      
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
              
	      <tr>
		<td>
		    <div style="width:100%;">
		      <input class="customer_button" onclick="mycreate();" name="update" id="update" type="submit" value="Update" style="float:right;margin-top:5px;">
		    </div>
	        </td>
	       </tr>
            </table>
	   </form>
	  </div>
        </div>
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
<script>
function mysubmit(ele)
    {
		
	$('form').submit(function(event) { //Trigger on form submit
	$('#name + .throw_error').empty(); //Clear the messages first
	$('#success').empty();
	    //Validate fields if required using jQuery
	 var values = $("#create_customer_first").serialize();
	 //alert(value);
	$.ajax(
	    { //Process the form using $.ajax()
		type        : 'POST', //Method type
		url         : 'ajaxcalling.php', //Your form processing file url
		data        : values, //Forms name
		success     : function(data)
		{
		    if(data)
		    {
			
			$('#create_customer_first')[0].reset();
			//alert("Recode is Inserted : Successfully");
			event.preventDefault(); //Prevent the default submit
		    }
		}
	    });
	
	});
    };
function mycreate()
    {
	
	$('form').submit(function(event) { //Trigger on form submit
	$('#name + .throw_error').empty(); //Clear the messages first
	$('#success').empty();
	
	    //Validate fields if required using jQuery
	 var values = $("#create_customer_third").serialize();
   
	$.ajax(
	    { //Process the form using $.ajax()
		type        : 'POST', //Method type
		url         : 'ajaxcalling.php', //Your form processing file url
		data        : values, //Forms name
		success     : function(data)
		{
	
			 if(data)
		    {
			
			$('#create_customer_third').reset();
//o			alert("Recode is Inserted : Successfully");
			event.preventDefault();
			
			 //Prevent the default submit
		    }
		}
	    });
	
	});
    };
function myupload(ele)
    { 
		$( '#create_customer_second' ).submit( function( e ) {
			
			//var values=new FormData( this );
			//alert(values);
			$.ajax( {
			  url: 'ajaxcalling.php',
			  type: 'POST',
			  data:new FormData(this),
			  processData: false,
			  contentType: false,
			  success     : function(responce)
		{		location.reload();
//			$('#create_customer_second')[0].reset();
//o			alert("Recode is Inserted : Successfully");
//			event.preventDefault(); //Prevent the default submit
//		    location.reload();
		}
			} );
			e.preventDefault();
		  } );
  };
</script>