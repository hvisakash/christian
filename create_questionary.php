<?php
include 'include/header.php';
//Functionaliry Of PopUp To All Query Question
if(isset($_POST['Se_Schema']))
	{
		$comment = (array)$_POST['comment'];
		$_SESSION['optionalText'] = $comment;
	}
//Functionaliry Of Save All Questionary Into Database	
if(isset($_POST['save']))
	{    
		//print_r($_POST['response']);die;
		$array=explode("$$$$$",$_POST['allQuestionVal']);
		$count=0;
		foreach($array as $key => $value)
		{
			$count++;
			$sql="insert into alog_questionary(questionary,response) values('$value','".$_POST['response']."')";
			mysql_query($sql);
		}
	}
?>
<div id="vis-holder"> 
   <div class="vis">
     <div class="mod-title"><?php echo $labels['create_questionary'];?></div>
    	<label>Cutomer Name:</label>
      		<?php
				if(isset($_SESSION['customer_name']))
					{
				  		echo $_SESSION['customer_name'];
					}
			  ?>
     			<div class="main_div" align="center" style="padding:120px;">
         			<div class="form_div div2">
           		<!----Start form---->
              			<form name="response_frm" method="post" id="response_frm">
              	<!---- Start functionality Of yes/no---->
                        	<div class="div2_left">
                				<input type="radio" name="response" value="YES" required autofocus><?php echo $labels['yes']?></input>
                			</div>
              				<div class="div2_right">
                				<input type="radio" name="response" value="NO"><?php echo $labels['no']?></input>
              				</div>
                <!---- End functionality Of yes/no---->
              				<div class="optional_text" align="center">
               	<!--Start Option Text--->
             					<textarea name="comment[]" id="commentID" class="signup-input name " placeholder="<?php echo $labels['optional_text'];?>"></textarea>
             				</div>
            	<!--End Option Text --->
              				<div class="fotter_button2" style="text-align:center; margin:center; padding:40px;">
                 <!--Start Functionality Of Add Button --->           
             					<input class="signup-button1" type="submit" name="add" id="add" value="<?php echo $labels['add'];?>" />
               	<!--End Functionality Of Add Button ---> 
              				</div>
                                 <br />
                                 <br />
                                 <br />
                                 <br />
                                 <br />
                                 <br />
             		 		<div class="fotter_button2">
             		<!--Start Functionality SE SCHEMA Button --->		
                            	<a href="#link1"  class="link" data-toggle="modal">
             						<input class="signup-button1 link" data-toggle="modal" id="Se_Schema" type="submit" name="Se_Schema" value="<?php echo $labels['se_schema'];?>" style="margin-left:400px"></a>
                                 <br />
                                 <br />
             		<!--END Functionality SE SCHEMA Button --->
                    <!--Start Functionality SAVE Button --->
             						<input class="signup-button1" type="submit" name="save"  value="<?php echo $labels['save'];?>"  style="margin-left:400px" />
             		<!--End Functionality SAVE Button --->
              				</div>
             			<input type="hidden" name="allQuestionVal" id="allQuestionVal" value=""/>
             	</form> 
 					<!----END FORM---->
        </div>
      </div>  
    </div>
  </div>
</div>  
<?php
include 'include/footer.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
         var x = 1; //initlal text box count
         $('#add').click(function(e){ //on add input button click
              e.preventDefault();
				var oldVal = $("#allQuestionVal").val();
				var currentVal = $("#commentID").val();
				if(oldVal === ""){					
					oldVal += currentVal;
				}
				else {
					oldVal += "$$$$$"+currentVal;
				}
				
				console.log($("#allQuestionVal").val());			
				$("#allQuestionVal").val(oldVal);
				console.log($("#allQuestionVal").val());
				$("#popupTxt").append("<div>"+currentVal+"</div>");
				$("#commentID").val("");
		    	console.log();
		});
</script>
<!--start popup code-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<!--popup div-->
<div id="link1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header headerBG">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="popupTxt"></div>
              </div>
		</div>
	</div>
</div>
<!--End popup-->

