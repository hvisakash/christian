function setSession(value){
	$.ajax({
	   type: "POST",
	   url: "",
	   data: { language: value}
	})
  .done(function( msg ) {
    //alert( "Data Saved: " + msg );
    location.reload();
  });
}

function exit_user(){
	var a=confirm("Sure You Want To Exit");
	if(a)
		window.location="index.html";
}