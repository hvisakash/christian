<?php
include 'include/header.php';
require_once 'connection.php';
//Select Customer for Who Access Guard
	$select="select * from alog_guard";
	$result=mysql_query($select);
//echo "<pre>";print_r($labels);die("raam");
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['super_user_guard_edit_delete'];?></div>
    <br /><select name="select_guard" class="select_guard">
            	<option value="Select Guard"><?php echo $labels['select_guard']; ?></option>
                 <!--- WHILE LOOP FOR GET CUSTOMER NAME TO ASSIGN-->   
               <?php while($name=mysql_fetch_array($result))
			   {?>
               <option value="<?php echo $name['id']?>" id="<?php echo $name['id'];?>"><?php echo $name['name'];?></option>
               <?php }?>
            </select> 
 
     <form method="post" action="" class="">
                 <div class="esc" align="center">
          <div class="form_container">
            <table cellpadding="5" cellspacing="5">
                <tr>
                      <td><?php echo $labels['redises']; ?></td>
                      <td>
                      <input type="text" name="text1" id="text1"/> 
                      </td>
                </tr>
                <tr>
                	  <td><?php echo $labels['name']; ?></td>
                      <td>
                      <input type="text" name="text2" id="text2"/>
                      </td>
                </tr>
                <tr>
                      <td><?php echo $labels['surname']; ?></td>
                      <td>
                      <input type="text" name="text3" id="text3"/>
                      </td>
               </tr>
               <tr>
                      <td><?php echo $labels['email']; ?></td>
                      <td>
                      <input type="text" name="text4" id="text4"/>
                      </td>
               </tr>
               <tr>
                      <td><?php echo $labels['password']; ?></td>
                      <td>
                      <input type="text" name="text5" id="text5"/>
                      </td>
               </tr>
               <tr>
                      <td>
                      <select name="select_access">
                      
                       <option value="Select customer who access guard"><?php echo $labels['select_customer']; ?></option>
                      
                      </select>
                      </td>
               </tr>
               <tr>
                      <td>
                      <input class="customer_button" type="submit" name="delete" id="delete" value="<?php echo $labels['edit']; ?>"/>
                      </td>
                      <td>
                      <input class="customer_button" type="submit" name="create" id="create" value="<?php echo $labels['delete']; ?>"/>
                      </td>
               </tr>
            </table>
       </div>   
       </div>
     </form> 
    </div>        
  </div>
</div>
  
<?php
include 'include/footer.php';
?>
