<?php
include 'include/header.php';
//require_once 'connection.php';
//Functionality Of EDIT CUSTOMER Record
if(isset($_POST['company_update'])){
	
	include 'connection.php';
	
	if($_POST['name_of_company']and $_POST['address']and $_POST['name_of_person']and $_POST['email']and $_POST['password']and $_POST['insert_instruction']!=NULL){
		
	$query="update alog_company set name_of_company='".$_POST['name_of_company']."',address='".$_POST['address']."',name_of_contact_person='".$_POST['name_of_person']."',email='".$_POST['email']."',password='".$_POST['password']."',insert_instruction='".$_POST['insert_instruction']."' where id='".$_POST['company_id']."'";
	mysql_query($query);
 header('location:edit_customer.php');		
	}
}
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['edit_customer'];?></div>
    <div class="main_div">
        <div class="first_section">
         <!--SELECT CUSTOMER FOR DROPDOWN LIST-->
        <form method="post" action="" class="form1 select_customer">
           <table cellpadding="5" cellspacing="5">
                <tr>
                      
                    <?php //Select Guard For 
                        include 'connection.php';
                    $select="select * from alog_company";
                    $result=mysql_query($select);//$name=mysql_fetch_array($result);echo"<pre>";print_r($name);die("QQ");?>
                    <td>
                 <select name="select_company" id="select_company">
                        <option value="Select company"><?php echo $labels['name_of_company']; ?></option>
                         <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
                       <?php while($name=mysql_fetch_array($result))
                       {?>
                  <option value="<?php echo $name['id']?>" id="<?php echo $name['id'];?>"><?php echo $name['name_of_company'];?></option>
                       <?php }?>
                 </select> 
                </td>
               </tr>
           </table>
          </form> 
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5">
            <tr>
              
              <td><input type="hidden" name="company_id" id="company_id"></td>
            </tr>
            <tr>
              <td><?php echo $labels['name'];?> </td>
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
              <td colspan="2"><?php echo $labels['enter_insert_instruction'];?></td>
            </tr>

            <tr>
              <td colspan="2">
                <textarea name="insert_instruction" id="insert_instruction" class="customer_textarea">
                </textarea>
              </td>
            </tr>

            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="company_update" id="company_update" type="submit" value="<?php echo $labels['update'];?>"></td>
              <td></td>
            </tr>
          </table>
          </form>
        </div>
    <div class="second_section">
      <div style="width:100%;float:left;">
	    <input type="button" name="edit_schedule" id="edit_schedule" class="customer_button" value="<?php echo $labels['update_schedule'];?>">
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
       
      <!--EDIT CUSTOMER WHO SELECTED FROM DROPDOWN LIST -->
          <div style="width:100%;float:left;">
          
            <label><?php echo $labels['must_enter_data_for_visitian'];?></label>
            
	    <form name="create_customer_third" id="create_customer_third" action="" method="POST">
            
            <table cellpadding="5" cellspacing="5">
               <tr>
                <td><input type="hidden" name="customer_id" id="customer_id"></td>
              </tr>
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
		      <input class="customer_button" onclick="mycreate();" name="edit_customer" id="edit_customer" type="submit" value="<?php echo $labels['update'];?>" style="float:right;margin-top:5px;">
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

<!-Functionality Of select customer data from alog_customer table through jquey Ajax at action of select tag(select_customer_name)-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery_1.6.1.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$("select#select_company").change(function(){
    var id = $("select#select_company option:selected").attr('value');
    var data = 'id=' + id;
	 $.ajax({
			type: "POST",
			url: "AJAX_EDIT_CUSTOMER.php", //Relative or absolute path to response.php file
			data: data,
			dataType: "json",
			success: function(data)
                  {
			 $('#company_id').val(data.id);
			 $('#name_of_company').val(data.name_of_company);
			 $('#address').val(data.address);
			 $('#name_of_person').val(data.name_of_contact_person);
			 $('#email').val(data.email);
			  $('#password').val(data.password);
			 $('#insert_instruction').val(data.insert_instruction);
			}
			}); 
	
    });
});
</script>
	
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