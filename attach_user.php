<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Superbruger - Tilknyt Bruger</div>
    <div class="main_div">
        <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5" class="div2_center">
            <tr>
              <td>NY Bruger</td>
              <td><select name="existing_user"><option value="eksisterende">Eksisterende</option></select></td>
            </tr>
            <tr>
              <td>Navn</td>
              <td><input type="text" name="name_of_company" id="name_of_company"></td>
            </tr>

            <tr>
              <td>Email</td>
              <td><input type="email" name="email" id="email"></td>
            </tr>

            <tr>
              <td>Password</td>
              <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
              <td>Behæft</td>
              <td><input type="password" name="password" id="password"></td>
            </tr>

           
			 <tr>
              
              <td><input type="checkbox" name="password" id="password"></td>
              <td>Tilknyt Bruger</td>
            </tr>
			 
             <tr>
                <td><label class="copyright">Tilknyt Bruger Til Finde Kunder</label></td>
             </tr>
             
             <tr>
              <td><select name="existing_user"><option value="eksisterende">Eksisterende</option></select></td>
            </tr>
            <tr>
              <td><input class="customer_button"  onclick="mysubmit(this);" name="first_section" id="first_section" type="submit" value="Opret Tilknyt"></td>
              <td></td>
            </tr>
          </table>
           
          </form>
        </div>
       
        </div>
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
