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
		<link rel="stylesheet" href="../css/principal.css">
  
     
   
        <title>Home Sweet Home - Administración | Vulcan Code</title>
     
    </head>
    <body>
   <div class="centrar-form">
<form  name="login_form" id="login_form_id" action="home.php" enctype="multipart/form-data" method="POST" onsubmit="return validate_form(this)">
                   
            
            
			<img src="/img/homesweethome_logo.jpg" alt="">
            <input type="text" name="email_form" value="" placeholder="Correo electrónico" required />           
            <input type="password" name="clave_form" value="" placeholder="Contraseña" required/>
            <input type="submit"  value="Iniciar Sesión" onClick="return validate_form();" />
            <?php 
            if($_GET){
                $i=utf8_decode($_GET['m']);
                
                
                switch ($i) {
                    case 1:
                        echo "El correo electrónico y/o la clave son inválidas";
                        break;
                    case 2:
                        echo "El correo electrónico y/o la clave son inválidas";
                        break;
                    case 3:
                        echo "Clave inválida";
                        break;
                    case 4:
                        echo "Sesión cerrada con éxito";
                        break;
                        
                        
                        
                }
            }
            
            
            ?>
			
			
                </form>
        
      
        
         </div>  
    
    
      </body>
          </html>