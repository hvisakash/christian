<?php
include 'include/header.php';
?><head>
<script>
function myFunction()
{
alert("your record successfully inserted");
}
</script>
</head>

<div id="vis-holder"> 
<div class="vis">
    <div class="mod-title">Statestik</div>
      <label>Cutomer Name:</label>
      <?php
        if(isset($_SESSION['customer_name'])){
          echo $_SESSION['customer_name'];
        }
      ?>
    <div class="esc" >
<form name="frm" method="post" action="" id="frm">
      
 <table align="center" border="0" class="signup">
    
     <tr> 
         <td class="signup-text"><?php echo $labels['name']?></td>
         <td> <input type="text" name="navn" id="" placeholder="Skriv inn navn" class="signup-input" /></td>
     </tr>  
       
     <tr>
        <td class="signup-text"><?php echo $labels['start_time']?></td>
        <td><input type="text" name="start_tid" id="" placeholder="vennligst skriv start tid" class="signup-input" /></td>
     </tr>
      
      <tr>
          <td class="signup-text"><?php echo $labels['end_time']?></td>
          <td><input  class="signup-input" type="text" name="slut_tid" id="" placeholder="vennligst skriv slut tid" /> </td>
      </tr>
      
      <tr>
        <td class="signup-text"><?php echo $labels['flight_no']?></td>
        <td><input type="text" name="fly_nr"  placeholder="vennligst skriv Flight Nei" class="signup-input" /></td>
      </tr>
      
      <tr>
         <td class="signup-text"><?php echo $labels['place']?></td>
         <td><input type="text" name="sted" id="" placeholder="vennligst skriv sted" class="signup-input" /></td>
    </tr>
      
      <tr>
          <td class="signup-text"><?php echo $labels['comment']?></td>
          <td><textarea name="kommentar" placeholder="" class="signup-input" cols="31"/></textarea></td>   
     </tr>
     
     <tr>
     <td><input class="signup-button" type="submit" name="submit"  value="<?php echo $labels['save_&_start']?>" onclick="myFunction()" /></td>
    
      
      <td><input class="signup-button1" type="button" name="submit"  value="<?php echo $labels['save_&_exit']?>" onclick="exit_user()" /></td>
     </tr>
     
</table>
</form>
</div>
</div>
</div>
   <?php
   // insert data in user table
if(isset($_POST['submit']))
{
  $navn=$_POST['navn'];
  $start_tid=$_POST['start_tid'];
  $slut_tid=$_POST['slut_tid'];
  $fly_nr=$_POST['fly_nr'];
  $sted=$_POST['sted'];
  $kommentar=$_POST['kommentar'];

  $result=mysql_query("INSERT INTO 
    `multilang`.`alog_user` ( `name`, `start_time`, `end_time`, `flight_no`, `place`, `comment`) 
    VALUES ( '$navn', '$start_tid', '$slut_tid', '$fly_nr', '$sted', '$kommentar')");
header('Location:response.php');
}
  ?>


<?php
include 'include/footer.php';
?>