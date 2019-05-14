<?php
if(session_status() == PHP_SESSION_NONE){
    header('Cache-Control: no cache'); //no cache
    session_cache_limiter('private_no_expire'); 
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
		<link rel="stylesheet" href="../css/home.css">
  
     
   
      <title>Home Sweet Home - Administración | Vulcan Code</title>
     
    </head>
    <body>
    
 
<div class='div_body'>
<?php
include ("db.php");
$link = conectar();

require_once ('autenticacion.php');

?>

 <a href="propiedades.php">Ver propiedades</a> 
  <a href="subastas.php">Ver subastas</a> 
   <a href="hotsales.php">Ver hotsales</a>
   <a href="cerrar_sesion.php">Cerrar sesión</a> 
   
   
  




</div>
</body>
</html>
