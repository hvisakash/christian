<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("HELLO");
 
//Functionality Of Post All Questionary To Response Page   
 
		//if(isset($_POST['Se_Schema']))
		//{
		//	$comment = (array)$_POST['comment'];
			
		//	$_SESSION['optionalText'] = $comment;
			//?<script>window.open("response.php", "MsgWindow", "width=500, height=500");script>?php
			 
			//header('location: response.php');
		//}

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
              <a href="response.php" class="popup2">
             <input class="signup-button1" id="Se_Schema" type="submit" name="Se_Schema" value="<?php echo $labels['se_schema'];?>" style="margin-left:400px"></a>
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
			  if(x < 3)
			  { //max input box allowed
                     x++; //text box increment
                     var code= $('.optional_text').append('<div><input type="text"  placeholder="<?php echo $labels['optional_text'];?>" class="signup-input" name="comment[]"/>'); //add input box
			
              }
    });


</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
	//initialize the 3 popup css class names - create more if needed
	var matchClass=['popup1','popup2','popup3'];
	//Set your 3 basic sizes and other options for the class names above - create more if needed
	var popup1 = 'width=400,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup2 = 'width=800,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup3 = 'width=1000,height=750,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	
	//The pop-up function
	function tfpop(){
			var x = 0;
			var popClass;
			//Cycle through the class names
			while(x < matchClass.length){
					popClass = "'."+matchClass[x]+"'";
					//Attach the clicks to the popup classes
					$(eval(popClass)).click(function() {
							//Get the destination URL and the class popup specs
							var popurl = $(this).attr('href');
							var popupSpecs = $(this).attr('class');
							//Create a "unique" name for the window using a random number
							var popupName = Math.floor(Math.random()*10000001);
							//Opens the pop-up window according to the specified specs
							newwindow=window.open(popurl,popupName,eval(popupSpecs));
							return false;
					});							
			x++;
			} 
	}
	
	//Wait until the page loads to call the function
	$(function() {
		tfpop();
	});
</script>
