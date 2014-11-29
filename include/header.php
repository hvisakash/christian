<?PHP 
//including connection file
require_once 'connection.php';
require_once 'include/setting_session.php';
$_SESSION['default_language']="2";

//ajax request for setting session
if(isset($_REQUEST['language'])){
  $_SESSION['language']=$_REQUEST['language'];
  die;
}

//confirming for default language or selected language
if(isset($_SESSION['language'])){
  $sql="select * from alog_page_entry where page_id='".$_SESSION['page_id']."' and language_code='".$_SESSION['language']."'";
}
else{
  $sql="select * from alog_page_entry where page_id='".$_SESSION['page_id']."' and language_code='".$_SESSION['default_language']."'";
}

//echo $sql;die;
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
  $labels[$row['field_label']]=$row['field_text'];
}
//echo "<pre>";print_r($array);die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Face Lift</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
$(document).ready(function(){
  $('body').on('click', '.remove', function() {
var a=$(this).parent().parent().text();
var newOption = "<option value='"+$(this).val()+"'>"+a+"</option>"; 
$("#selnm").append(newOption);
$(this).parent().parent().remove();
  });
  
  $(document).ready(function(){
$(".link").click(function(){
var name = $(".name").val();
});

});
					 
  
});
</script>
</head>
<body id="home">
  <div id="wrapper">
    <div id="wrappermain">
      <div id ="header_holder"> <!--Header Holder-->
        <div id ="header"> 
          <a href="#">
            <img src="images/logo.jpg"  alt="image one" border="0"/>
          </a>
          <a href="#">
            <img src="images/icon.jpg"  alt="image one" border="0" style="float: right;"/>
          </a>
        </div>

      <div class="main_menu"> <!--Main Menu holder-->
          <ul>   
            <span class="home-icon">
                <img src="images/home.jpg" alt="image one" border="0"/>
            </span>
            <li> <a href="#">Servicerapport</a></li>
            <li> <a href="#">Kundeoversigt</a></li>
            <li> <a href="#">betateam </a></li>
            <li> <a href="#">Eventoversigt</a></li>
            <li> <a href="#">Vagtplan</a></li>
            <li> <a href="#">Slideshow</a></li>
            <li> <a href="#">Velkommen Admin</a></li>
            <li> <a href="#">Log ud</a></li>
          </ul>
      </div>
  
  </div>
  
<div class="lang_image">   
  <label>Language</label>      
  <img id="de" class="change" name="2" title="Danish" src="images/da.gif" onclick="setSession(this.name)" style="cursor:pointer"> 
  <img id="en" name="1" class="change" title="English" value="1" src="images/en.gif" onclick="setSession(this.name)" style="cursor:pointer">
</div>         