
function validar_email(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};



function validate_form(){
	                                        
	var email = document.forms["login_form"]["email_form"].value;

	
	if (!(validar_email(email))){
		alert("Correo Electrónico Inválido");
			       return false;
	
	};
	
	return true;

	
	
	}
	