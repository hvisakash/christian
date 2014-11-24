<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die("HELLO");

if(isset($_POST['save']))
    {   
	
	    if($_POST['comment']==NULL)
	    {
			header('location: create_questionary.php');	
		}
		else
		{
			$sql="insert into alog_questionary(questionary,yes,no) values('".$_POST['comment']."','yes','no')";
			mysql_query($sql);
			header('location: create_questionary.php');
		}
	}
?>
<div id="vis-holder"> 
    <div class="vis">
     <div class="mod-title"><?php echo $labels['create_questionary'];?></div>
     <form name="response_frm" method="post" action="" id="create_questionary_frm">
       <div class="main_div" align="center" style="padding:120px;">
         <div class="form_div div2">
              
              <div class="div2_left">
                <button class="small_button" name="yes" id="yes" value="yes"><?php echo $labels['yes'];?></button>
              </div>
              
              <div class="div2_right">
                <button class="small_button" name="no" id="no" value="no"><?php echo $labels['no'];?></button>
              </div>
              
              <div class="div2_center" align="center">
               <!--Valgfri Tekst--->
                <textarea name="comment" id="comment"  class="signup-input" placeholder="<?php echo $labels['optional_text'];?>"></textarea>
             
              <div class="fotter_button2" style="text-align:center; padding:160px;">
             <input class="signup-button1" type="submit" name="save" id="save"  value="<?php echo $labels['save'];?>" />
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
