<?php
include 'include/header.php';
include 'connection.php';

//functionality Of save/new questionary In To Database
if(isset($_POST['start'])){

	 $question=(array)$_POST['question'];
	 $array=array_filter($question);
	 $guard_id=$_SESSION['customer_id'];
		$count=0;
			foreach($array as $key => $value)
			{
				 $count++;
	 $query="insert into alog_approve_response(question,response,guard_id) values('$value','".$_POST['response']."','$guard_id')";
	 mysql_query($query);
	 //print_r(mysql_query($query));die("hello");

			}
	
	}
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
     <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
		  echo $_SESSION['customer_id'];
		 }
		 
      ?>
      <form name="response_frm" method="post" action="" id="response_frm">
        <div class="esc" align="center">
          <div class="form_container">
          <?php if(isset($_SESSION['optionalText'])){  $text=array_filter($_SESSION['optionalText']); ?> 
            <div class="form_div div1">
              <br>
             
              <input type="text" name="question[]" value="<?php  echo $text[0]?>"  class="signup-input">
            </div>

            <div class="form_div div2">
              <div class="div2_left">
              <input type="radio" name="response" value="<?php echo $labels['yes']?>"><?php echo $labels['yes']?></input>
                <!--<button class="small_button" name="yes" value="yes"><?php echo $labels['yes']?></button>-->
              </div>
              <div class="div2_right">
              <input type="radio" name="response" value="<?php echo $labels['no']?>"><?php echo $labels['no']?></input>
                <!--<button class="small_button" name="no"  value="no"><?php echo $labels['no']?></button>-->
              </div>
              <div class="div2_center">
             <textarea name="question[]"  value="<?php  echo $text[1]?>" class="signup-input"><?php  echo $text[1]?></textarea>
              </div>
            </div>

            
              <div class="div2_center">
                
                <textarea name="question[]" value="<?php  echo $text[2]?>"  class="signup-input" ><?php  echo $text[2]?></textarea>
              </div>
            </div>

            <div class="form_div div3">
              <input type="text" class="signup-input" ><br>
              <label><?php echo $labels['signature']?></label>
            </div>

            <div class="form_div fotter_buttons div4">
              <div class="div4_buttons">
                <div class="fotter_button1">
                <input class="signup-button1" type="button" name="back" onclick="redirect_back()"  value="<?php echo $labels['back']?>" />
                </div>
                <div class="fotter_button2">
                  <input class="signup-button1" type="submit" name="start"  value="<?php echo $labels['start']?>" />
                </div>
                <div class="fotter_button3">
                  <input class="signup-button1" type="button" name="submit"  value="<?php echo $labels['roof_picture']?>" />
                </div>
              </div>
            </div>
            <?php  } ?>
          </div>
        </div>
      </form>
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
<script>
function redirect_back(page)
{
    	//alert("HELLO < BRaJ");
         window.location = 'login.php';
    
}
    </script>