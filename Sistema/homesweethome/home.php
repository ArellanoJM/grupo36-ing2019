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
		<link rel="stylesheet" href="css/home.css">
  
     
   
        <title>Home Sweet Home - Bienvenida | Vulcan Code</title>
     
    </head>
    <body>
    
 
<div class='div_body'>
<?php
include ("db.php");
$link = conectar();

require_once ('autenticacion.php');

//VARIABLES GLOBALES DE id_cliente y puntos

$sql = "SELECT id_propiedad,nombre,numero,direccion,piso,depto,codigo_postal,provincia,localidad  FROM propiedades ";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "
            <table class='class_propiedad'>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número</th>
                    <th>Dirección</th>
                    <th>Piso</th>
                    <th>Departamento</th>
                    <th>Código Postal</th>
<th>Provincia</th>
<th>Localidad</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label='Nombre'>$row[nombre]</td>
                    <td data-label='Número'>$row[numero]</td>
                    <td data-label='Dirección'>$row[direccion]</td>
                    <td data-label='Piso'>$row[piso]</td>
                    <td data-label='Departamento'>$row[depto]</td>
                    <td data-label='Código Postal'>$row[codigo_postal]</td>
<td data-label='Provincia'>$row[provincia]</td>
<td data-label='Localidad'>$row[localidad]</td>

                </tr>
               </tbody>
               
               
            </table>";
           
    }
    
}

?>












  <a href="subastas.php">Ver subastas</a> 
   <a href="hotsales.php">Ver hotsales</a> 
      <a href="cerrar_sesion.php">Cerrar sesión</a> 
   
</div>
</body>
</html>
