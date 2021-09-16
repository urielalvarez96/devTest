function init(){


    $( "#btnSave" ).click(function() {
        
        var email = $("#email").val();
        var email2 = $("#email2").val();

        if(email != email2){
            bootbox.alert("Emails are differents");	 
        }
		save();	
      });

}

function limpiar()
{
	$("#firstName").val("");
    $("#lastName").val("");
	$("#email").val("");
    $("#email2").val("");
    $("#password").val("");
}

function save()
{
	$("#btnSave").prop("disabled",true);
	var formData = new FormData();
    formData.append('firstName', $("#firstName").val());
    formData.append('lastName', $("#lastName").val());
    formData.append('email', $("#email").val());
    formData.append('password', $("#password").val());
    
	$.ajax({
		url: "../ajax/user.php?op=save",
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
}

init();