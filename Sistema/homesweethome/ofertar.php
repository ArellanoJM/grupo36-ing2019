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
  
     
   
      <title>Home Sweet Home - Ofertar | Vulcan Code</title>
     
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
    $semana_form = utf8_decode($_POST['name_semana_form']);
    $precio_base_form = utf8_decode($_POST['name_precio_base_form']);
    $year_form = utf8_decode($_POST['name_year_form']);
    $monto_ofertado_form = utf8_decode($_POST['name_monto_ofertado_form']);
    
    if ($monto_ofertado_form>$precio_base_form){
      
    $query = "INSERT INTO `subasta_{$id_propiedad_form}_{$nombre_form}_{$semana_form}_{$year_form}` (monto,id_cliente) VALUES ('$monto_ofertado_form', '123456789')";
    if (mysqli_query($link, $query)) {
        echo '<div class="alert">Oferta realizada con éxito</div>';
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    
    }else{
        echo "Debe ingresar un monto mayor";
    }
    



}
mysqli_close($link);

?>


  <a href="subastas.php">Ver subastas</a> 
   <a href="hotsales.php">Ver hotsales</a>
   <a href="cerrar_sesion.php">Cerrar sesión</a> 
   
   
  




</div>
</body>
</html>
