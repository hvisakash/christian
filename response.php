<?php
include 'include/header.php';
include 'connection.php';
//functionality for select field
$survey="SELECT * FROM alog_survey ";
$survey_result=mysql_query($survey);

//Functionality Of Fetch New Questionary From Database
/*	$sql="select * from alog_questionary aq left join alog_approve_response ar on aq.id!=ar.questionary_id ";
	//$sql="select aq.id,aq.questionary from alog_questionary aq left join alog_approve_response ar on aq.id!=ar.questionary_id";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	echo"<pre>";print_r($row);
	//echo $row['id'];
	//die;
$query="select * from alog_survey";
$re=mysql_query($query);
$rs=mysql_fetch_array($re);
//print_r($rs);
 $id=$rs['sur_id'];//die;
$count=0;
while($id){	
				$count++;
				$fetch_query="select * from alog_questionary where survey_id='$id'";
				$fetch_re=mysql_query($fetch_query);
				$fetch_rs=mysql_fetch_array($fetch_re);
				print_r($fetch_rs);
	
			}
*/	
//functionality Of save questionary In To Database
if(isset($_POST['start']))
	{
		//$id=$_POST['id'];
		$radio=$_POST['radio'];
		$questionary=$_POST['questionary'];
		//echo "<pre>";
		//print_r($radio);
		//die;
		foreach($radio as $key=>$value )
		{
			$sql="insert into alog_approve_response set response='".$value."',questionary_id='".$key."'";
			mysql_query($sql);
		}
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
            <br/>
            <br/>
            <select name="select_guard" id="select_guard">
	            <option value="Select Guard"><?php echo $labels['select_survey']; ?></option>
    	        <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
        	    <?php
        	    while($row1=mysql_fetch_array($survey_result)){ ?>   
            	<option value="<?php echo $row1['sur_id']?>" id="<?php echo $row1['sur_id'];?>"><?php echo $row1['survey_name'];?></option>
            	<?php }?>
            </select>
            <form name="response_frm" method="post" action="" id="response_frm">
			<div class="esc" align="center">
            <!----fetching record through Loop----> 
	        	<div  id="questions">
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
            </form>   
			</div>
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
$(document).ready(function(){
$("#response_frm").hide();
$("select#select_guard").change(function(){
    var id = $("select#select_guard option:selected").attr('value');
    $("#response_frm").show();
	var data='sur_id=' + id+'&lang='+<?php echo $_SESSION['language']?>;
	$.ajax({
		type: "POST",
		url: "ajax_Edit_guard.php", //Relative or absolute path to response.php file
		data: data,
		success: function(data)
		{//alert(data);
			$("#questions").html(data);
		}
		}); 
    });
});
</script>