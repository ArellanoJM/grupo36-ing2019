<?php
//secure
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
      <script type="text/javascript" src="validate.js"></script> 
   <!--   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
	   	<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="css/principal.css">
  
     
   
     <title>Home Sweet Home - Registrarse | Vulcan Code</title>
     
    </head>
    <body>

<?php

include ("db.php");
$link = conectar();


$email_chk = utf8_decode($_POST['email_form']);

$clave = utf8_decode($_POST['clave_form']);

$query_agregar = "INSERT INTO clientes (email,clave) VALUES ('$email_chk','$clave')";

if(mysqli_query($link, $query_agregar)){
    echo "Solicitud realizada con éxito";

   
    
}





?>


</body>

</html>