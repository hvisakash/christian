<?php
include 'include/header.php';
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title">Statestik</div>
     <form method="post" action="" class="">
     <div class="esc" align="center">
          <div class="form_container">
            <div class="form_div div1">
             <div class="div2_left">
        	<select name="select_guard">
            	<option value="Select Guard">Select Guard</option>
            </select>
            </div> 
            <div ><br/>&nbsp;&nbsp;&nbsp;&nbsp;
		     Redises:<input type="text" name="text1" id="text1"/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Nawn:<input type="text" name="text2" id="text2"/><br/><br/>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Efternam:<input type="text" name="text3" id="text3"/><br/><br/>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Email:<input type="text" name="text4" id="text4"/><br/><br/>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Password:<input type="text" name="text5" id="text5"/>
<br/><br/>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name="select_access">
            	<option value="Select Guard">Select Access</option>
            </select>
            
            
  
            </div>
          
                    <input class="customer_button" type="submit" name="delete" id="delete" value="SLET"/>
              
            <input class="customer_button" type="submit" name="create" id="create" value="OPRET"/>
            
             
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
