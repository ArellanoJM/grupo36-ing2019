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
		<link rel="stylesheet" href="../css/home.css">
  
     
   
      <title>Home Sweet Home - Administración | Vulcan Code</title>
     
    </head>
    <body>
    
 
<div class='div_body'>
<?php
include ("db.php");
$link = conectar();


if($_POST){
    $id_propiedad_form = utf8_decode($_POST['name_id_propiedad_form']);
    $nombre_form = utf8_decode($_POST['name_nombre_form']);
    $numero_form = utf8_decode($_POST['name_numero_form']);
    $direccion_form = utf8_decode($_POST['name_direccion_form']);
    $piso_form = utf8_decode($_POST['name_piso_form']);
    $depto_form = utf8_decode($_POST['name_depto_form']);
    $codigo_postal_form = utf8_decode($_POST['name_codigo_postal_form']);
}
echo "¿Confirma deshabilitar la propiedad para subasta?";

echo "<form method='POST' action='deshabilitar_subasta_chk.php' enctype='multipart/form-data' name='deshabilitar_subasta_form'>

                 <input type='hidden' id='id_propiedad_form' name='name_id_propiedad_form' value='$id_propiedad_form'/>
                 
                 
             <input class='button' type='submit'  value='Confirmar Deshabilitación de Subasta' />
             
        </form>";


?>


   
   
  




</div>
</body>
</html>
