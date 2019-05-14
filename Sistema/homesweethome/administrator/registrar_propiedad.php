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



?>

<form name="registro_propiedad_form" action="registrar_propiedad_chk.php" enctype="multipart/form-data" method="POST">
           
			<h2>Registrar Propiedad</h2>
            
            <input type="text" name="direccion_form" value="" placeholder="Dirección" required/>
            <input type="text" name="nombre_form" value="" placeholder="Nombre" required />
            <input type="text" name="numero_form" value="" placeholder="Número" required />
            <input type="text" name="piso_form" value="" placeholder="Piso" />
            <input type="text" name="depto_form" value="" placeholder="Departamento" />
            <input type="text" name="codigo_postal_form" value="" placeholder="Código Postal" />
            <input type="text" name="provincia_form" value="" placeholder="Provincia" />
            <input type="text" name="localidad_form" value="" placeholder="Localidad" />
        
            
            
            
            <input type="submit"  onclick="validarFormulario()" value="Registrar Propiedad" /><br>
            
            

        </form>





</div>
</body>
</html>
