<?php
include 'include/header.php';
//echo"<pre>";print_r($labels);die("dd");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
    <div class="main_div">
        <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5">
            <tr>
              <td><?php echo $labels['name_of_company'];?></td>
              <td><input type="text" name="name_of_company" id="name_of_company"></td>
            </tr>

            <tr>
              <td><?php echo $labels['address'];?></td>
              <td><input type="text" name="address" id="address" ></td>
            </tr>

            <tr>
              <td><?php echo $labels['name_of_contact_person'];?></td>
              <td><input type="text" name="name_of_person" id="name_of_person"></td>
            </tr>

            <tr>
              <td><?php echo $labels['email'];?></td>
              <td><input type="email" name="email" id="email"></td>
            </tr>

            <tr>
              <td><?php echo $labels['password'];?></td>
              <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
              <td colspan="2"><?php echo $labels['enter_insert_instructions'];?></td>
            </tr>

            <tr>
              <td colspan="2">
                <textarea name="insert_instruction" id="insert_instruction" class="customer_textarea">
                </textarea>
              </td>
            </tr>

            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="<?php echo $labels['save'];?>"></td>
              <td></td>
            </tr>
          </table>
          </form>
        </div>
    <div class="second_section">
      <div style="width:100%;float:left;">
	    <input type="button" name="create_schedule" id="create_schedule" class="customer_button" value="<?php echo $labels['create_schedule'];?>">
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
		<input class="customer_button"  onclick="myupload(this);" name="upload_images" id="upload_images" type="submit" value="<?php echo $labels['upload'];?>" style="float:right;margin-top:5px;">
	  </div>
		   
    </form>
   
    </div> 
   </div>
        <div class="third_section">
          <div style="width:100%;float:left;">
            <label><?php echo $labels['mast_enter_data_for_visitian'];?></label>
	    <form name="create_customer_third" id="create_customer_third" action="" method="POST">
            <table cellpadding="5" cellspacing="5">
               <tr>
                <td><?php echo $labels['name'];?></td>
                <td><input type="text" name="customer_name" id="customer_name"></td>
              </tr>
	      
	      <tr>
                <td><?php echo $labels['start_time'];?></td>
                <td><input type="text" name="start_time" id="start_time"></td>
              </tr>

              <tr>
                <td><?php echo $labels['end_time'];?></td>
                <td><input type="text" name="end_time" id="end_time"></td>
              </tr>

              <tr>
                <td><?php echo $labels['flight_no'];?></td>
                <td><input type="text" name="flight_no" id="flight_no"></td>
              </tr>

              <tr>
                <td><?php echo $labels['place'];?></td>
                <td><input type="text" name="place" id="place"></td>
              </tr>

              <tr>
                <td><?php echo $labels['comment'];?></td>
                <td><input type="text" name="comment" id="comment"></td>
              </tr>
              
	      <tr>
		<td>
		    <div style="width:100%;">
		      <input class="customer_button" onclick="mycreate();" name="create" id="create" type="submit" value="<?php echo $labels['create'];?>" style="float:right;margin-top:5px;">
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