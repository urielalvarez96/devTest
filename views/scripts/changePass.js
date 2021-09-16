function init(){


    $( "#btnChange" ).click(function() {
    
		edit();	
      });

}

function limpiar()
{
	$("#email").val("");
    $("#oldpassword").val("");
	$("#newpassword").val("");
}

function edit()
{
	$("#btnChange").prop("disabled",true);
	var formData = new FormData();
    formData.append('email', $("#email").val());
    formData.append('password', $("#oldpassword").val());
    formData.append('newpassword', $("#newpassword").val());
    
	$.ajax({
		url: "../ajax/user.php?op=edit",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	        bootbox.alert(datos);	          
	          
	    }

	});
	limpiar();
    $(location).attr("href","landing.php");            
}


init();