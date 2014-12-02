<?php 
//Functionality Of select Guard edit At The Time update Guard 
include 'connection.php';
if(isset($_POST['id'])){
	 $sql="select * from alog_guard where id='".$_POST['id']."'";
	 $result=mysql_query($sql);
	 $row=mysql_fetch_array($result);
	 //print_r($row);die("rr");
	echo json_encode($row);
	}
	//functionality of selected survey report
	if(isset($_POST['sur_id'])){
	 $sql="SELECT * FROM alog_questionary where survey_id='".$_POST['sur_id']."'";
	 $result=mysql_query($sql);
	 //$question[]="";
	while($row=mysql_fetch_array($result)){
		//$questions[$row['id']]=$row['questionary'];
		$var='
		<div class="form_div div2">
			<div class="div2_left">
				<input type="radio" name="radio['.$row['id'].']" value="yes" required autofocus>yes</input>
			</div>
			<div class="div2_right">
				<input type="radio" name="radio['.$row['id'].']" value="no">No</input>
			</div>
			<div class="div2_center select_text">
				<input name="questionary['.$row['id'].']" type="text" value="'.$row['questionary'].'" readonly="readonly"/>
			</div>
			
		</div>
		';
		
		echo $var;
	}
	
	// echo json_encode($questions);
		
	}
?>