<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("HELLO");
//Functionality Of Post All Questionary To Response Page   
//if(isset($_POST['Se_Schema']))
	//{
	//$comment = (array)$_POST['comment'];
	//$_SESSION['optionalText'] = $comment;
		//foreach($_SESSION['optionalText'] as $key=>$value){	?>
       <!-- <input type="text" value="<?php //echo $value; ?>"/><br />
-->        		<?php
		//}

	//print_r($_SESSION['optionalText']);die("tt");
	//}
	
if(isset($_POST['Se_Schema']))
	{
	$comment = (array)$_POST['comment'];
	$_SESSION['optionalText'] = $comment;
	}
	

//Functionaliry Of Save All Questionary Into Database	
if(isset($_POST['save']))
{       
	$comment = (array)$_POST['comment'];
	$array=array_filter($comment);
	$count=0;
	foreach($array as $key => $value)
	{
		$count++;
		$sql="insert into alog_questionary(questionary,yes,no) values('$value','yes','no')";
		mysql_query($sql);
		
	}
}
?>
<div id="vis-holder"> 
    <div class="vis">
     <div class="mod-title"><?php echo $labels['create_questionary'];?></div>
    <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
        }
      ?>
     <form name="response_frm" method="post" id="response_frm">
       <div class="main_div" align="center" style="padding:120px;">
         <div class="form_div div2">
              
              <div class="div2_left">
                <button class="small_button" name="yes" id="yes" value="yes"><?php echo $labels['yes'];?></button>
              </div>
              
              <div class="div2_right">
                <button class="small_button" name="no" id="no" value="no"><?php echo $labels['no'];?></button>
              </div>
      
              <div class="optional_text" align="center">
               <!--Valgfri Tekst--->
             <textarea name="comment[]" class="signup-input" placeholder="<?php echo $labels['optional_text'];?>"></textarea>
             </div>
           
              <div class="fotter_button2" style="text-align:center; margin:center; padding:40px;">
             <input class="signup-button1" type="submit" name="add" id="add" value="<?php echo $labels['add'];?>" /> 
              </div>
       
             <br />
             <br /><br />
             <br /><br />
             <br />
              <div class="fotter_button2">
             <a href="#link1"  class="link" data-toggle="modal">
             <input class="signup-button1 link" data-toggle="modal" id="Se_Schema" type="submit" name="Se_Schema" value="<?php echo $labels['se_schema'];?>" style="margin-left:400px">	</a>
             <br />
             <br />
             <input class="signup-button1" type="submit" name="save"  value="<?php echo $labels['save'];?>"  style="margin-left:400px" />
             
              </div>
             
             </form> 
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
		      $('.signup-input').hide('name.comment[x]');
			  //max input box allowed
                     x++; //text box increment
                     var code= $('.optional_text').append('<div><input type="text"  placeholder="<?php echo $labels['optional_text'];?>" class="signup-input" name="comment[]"/>'); //add input box
                 });
</script>


<!--start popup code-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>

<div id="link1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header headerBG">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                	<?php
					foreach($_SESSION['optionalText'] as $key=>$value){	?>
        <input class='a' name="td[]" type="text" value="<?php echo $value; ?>"/><br />
        		<?php }
				unset($_SESSION['td']);
				 ?>
            
			</div>
		</div>
	</div>
</div>
<!--End popup-->

