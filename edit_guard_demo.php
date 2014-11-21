<script type="text/javascript" src="jquery_1.6.1.js"></script>
<script type="text/javascript"><!--
$(document).ready(function() {
  // when the form "#crs" is submited
  $('#crs').submit(function() {
    // get form data
    var nm = $('#crs #nm').val();
    var cs = $('#crs #cs').val();
    var cmt = $('#crs #cmt').val();

    // put form data in a JSON format that will be sent to the server
    var data_json = {'nm':nm, 'cs':cs, 'cmt':cmt};

    // sets the ajax() method to send data through POST to a PHP script
    // if occurs an error, alerts the request status (xhr.status) and the error
    // when the request succeeds, place the response in a HTML tag with id="resp"
    $.ajax({
      type: 'post',
      url: 'script.php',
      data: data_json,
      beforeSend: function() {
        // before send the request, displays a "Loading..." messaj in the element where the server response will be placed
        $('#resp').html('Loading...');
      },
      timeout: 10000,        // sets timeout for the request (10 seconds)
      error: function(xhr, status, error) { alert('Error: '+ xhr.status+ ' - '+ error); },
      success: function(response) { $('#resp').html(response); }
    });

    return false;      // required to not open the page when form is submited
  });
});
--></script>