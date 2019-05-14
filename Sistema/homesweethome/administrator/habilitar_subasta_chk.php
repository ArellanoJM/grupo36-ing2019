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
    $precio_base_form = utf8_decode($_POST['name_precio_base_form']);
    $semana_form = utf8_decode($_POST['name_semana_form']);
    
    $fecha_ingreso = date("Y-m-d"); 
    //$fecha_egreso("d-m-Y", strtotime($fecha_ingreso. ' + 3 days'));
    $date = new DateTime($fecha_ingreso);
    $date->modify('+3 day');
    $fecha_egreso = $date->format('Y-m-d');
  

    $sql_subasta ="INSERT INTO propiedades_subasta (id_propiedad,precio_base,semana,fecha_ingreso,fecha_egreso) VALUES ('$id_propiedad_form','$precio_base_form','$semana_form','$fecha_ingreso','$fecha_egreso')";
    
    
    $result_subasta = $link->query($sql_subasta);
    if (mysqli_affected_rows($link)>0){
        echo '<div class="alert"><p>Propiedad habilitada para subasta.</p></div>';

    $year = date("Y");
   
   // fecha_puja 
    
    //$sql_tabla = "CREATE TABLE '.$id_propiedad_form.' (monto INT(11) NOT NULL,INDEX (monto))";
    $sql_tabla="  CREATE TABLE IF NOT EXISTS `subasta_{$id_propiedad_form}_{$nombre_form}_{$semana_form}_{$year}` (
    monto INT NOT NULL,
    id_cliente TEXT NOT NULL,
   
    
    PRIMARY KEY (monto)
    )";
    $result_tabla = $link->query($sql_tabla);
    
    
    

        
        
        
    }
    mysqli_close($link);
}


?>

 <a href="propiedades.php">Ver propiedades</a> 
  <a href="subastas.php">Ver subastas</a> 
   <a href="hotsales.php">Ver hotsales</a> 
   
   
  




</div>
</body>
</html>
