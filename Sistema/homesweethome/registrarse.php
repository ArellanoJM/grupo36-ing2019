<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
		<script type="text/javascript" src="validar.js"></script> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/principal.css">
  
     
   
        <title>Home Sweet Home - Registrarse | Vulcan Code</title>
     
    </head>
    <body>

<?php 

?>

<form  name="login_form" id="login_form_id" action="registrarse_chk.php" enctype="multipart/form-data" method="POST" onsubmit="return validate_form(this)">
                   
            
            
			<img src="/img/homesweethome_logo.jpg" alt="">
            <input type="text" name="email_form" value="" placeholder="Correo electrónico" required />           
            <input type="password" name="clave_form" value="" placeholder="Contraseña" required/>
            <input type="submit"  value="Registrarse" onClick="return validate_form();" />
			
	  
        </form>



 
    
      </body>
      
      </html>