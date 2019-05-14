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
   
    $sql_subasta ="DELETE FROM propiedades_subasta WHERE id_propiedad=$id_propiedad_form LIMIT 1";
    $result_subasta = $link->query($sql_subasta);
    if (mysqli_affected_rows($link)>0){
        echo '<div class="alert"><p>Propiedad deshabilitada para subasta.</p></div>';
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
