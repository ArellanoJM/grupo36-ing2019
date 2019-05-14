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

$direccion_form = utf8_decode($_POST['direccion_form']);
$nombre_form = utf8_decode($_POST['nombre_form']);
$numero_form = utf8_decode($_POST['numero_form']);
$piso_form = utf8_decode($_POST['piso_form']);
$depto_form = utf8_decode($_POST['depto_form']);
$codigo_postal_form = utf8_decode($_POST['codigo_postal_form']);
$provincia_form = utf8_decode($_POST['provincia_form']);
$localidad_form = utf8_decode($_POST['localidad_form']);

$sql = "SELECT nombre,numero FROM propiedades WHERE nombre='$nombre_form' LIMIT 1";
$result = $link->query($sql);

$row_cnt = mysqli_num_rows($result);


if ($row_cnt == 0) {

$query = "INSERT INTO propiedades (nombre,numero,direccion,piso,depto,codigo_postal,provincia,localidad) VALUES ('$nombre_form', '$numero_form','$direccion_form', '$piso_form', '$depto_form','$codigo_postal_form','$provincia_form','$localidad_form')";
if (mysqli_query($link, $query)) {
    echo '<div class="alert">Registrado con éxito</div>';
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
}else{
    echo "Propiedad repetida";
}
mysqli_close($link);

?>


            
                      
            
      



</div>
</body>
</html>
