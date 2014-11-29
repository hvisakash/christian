<?php
include 'include/header.php';
include 'connection.php';
//Functionality Of Fetch New Questionary From Database
	$sql="select * from alog_questionary aq left outer join alog_approve_response ar on aq.id!=ar.questionary_id";
	$result=mysql_query($sql);
	$row=mysql_fetch_row($result);
//functionality Of save questionary In To Database
if(isset($_POST['start']))
	{
		$query="insert into alog_approve_response(question,response,guard_id,questionary_id) values('".$_POST['question']."','".$_POST['response']."','0','".$row[0]."')";
		mysql_query($query);
		header('location: response.php');
	}
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
     <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name']))
		{
          echo $_SESSION['customer_name'];
		 
		}
      ?>
      	<form name="response_frm" method="post" action="" id="response_frm">
        	<div class="esc" align="center">
          		<div class="form_container">
               <!----fetching record through Loop----> 
               
          		<div class="form_div div2">
              	<div class="div2_left">
              	<input type="radio" name="response" value="<?php echo $labels['yes']?>" required autofocus><?php echo $labels['yes']?></input>
                </div>
              	<div class="div2_right">
              	<input type="radio" name="response" value="<?php echo $labels['no']?>"><?php echo $labels['no']?></input>
                </div>
              	
              	<div class="div2_center">
                <textarea name="question" class="signup-input" ><?php echo $row[1]; ?></textarea>
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
             
          </div>
         </div>
        </form>
      </div>
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