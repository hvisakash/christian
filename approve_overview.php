<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/tipped/tipped.js"></script>
<link rel="stylesheet" type="text/css" href="/css/tipped/tipped.css"/>

<script>
  $(document).ready(function() {
    Tipped.create('.customer_textarea',{ position: 'topleft' });
  });
</script>
<?php
include 'include/header.php';
//echo "<pre>";print_r($labels);die;
?>
<div id="vis-holder"> 
  <div class="vis">
    <div class="mod-title"><?php echo $labels['approve_overview'];?></div>
    <div class="main_div">
    <div class="first_section">
          <form name="create_customer_first" id="create_customer_first" action="" method="POST" class="customer">
          <table cellpadding="5" cellspacing="5">
            
            <tr>
              <td><button class="customer_textarea" title="vises hvor mange rapporter , der afventer godkendt"><?php echo $labels['show_scandil'];?></button>     </td>
            </tr>
           
            <tr>
              <td><button class="customer_textarea"><?php echo $labels['show_companys'];?></button></td>
            </tr>
            
            <tr>
              <td><button class="customer_textarea"><?php echo $labels['show_scandil_palace'];?></button></td>
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
