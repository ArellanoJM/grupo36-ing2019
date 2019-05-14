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

 <a href="registrar_propiedad.php">Registrar propiedad</a> 
  
 <?php 
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
           
           
           echo "<form method='POST' action='modificar_propiedad.php' enctype='multipart/form-data' name='modificar_propiedad_form'>
           
                 <input type='hidden' id='id_propiedad_form' name='name_id_propiedad_form' value='$row[id_propiedad]'/>
                <input type='hidden' id='nombre_form' name='name_nombre_form' value='$row[nombre]'/>
                <input type='hidden' id='numero_form' name='name_numero_form' value='$row[numero]'/>
                <input type='hidden' id='direccion_form' name='name_direccion_form' value='$row[direccion]'/>
                 <input type='hidden' id='piso_form' name='name_piso_form' value='$row[piso]'/>
                 <input type='hidden' id='depto_form' name='name_depto_form' value='$row[depto]'/>
                 <input type='hidden' id='codigo_postal_form' name='name_codigo_postal_form' value='$row[codigo_postal]'/>
                 
             <input class='button' type='submit'  value='Modificar Propiedad' />
             
        </form>";
           
           
           echo "<form method='POST' action='eliminar_propiedad.php' enctype='multipart/form-data' name='eliminar_propiedad_form'>
           
                 <input type='hidden' id='id_propiedad_form' name='name_id_propiedad_form' value='$row[id_propiedad]'/>
                <input type='hidden' id='nombre_form' name='name_nombre_form' value='$row[nombre]'/>
                <input type='hidden' id='numero_form' name='name_numero_form' value='$row[numero]'/>
                <input type='hidden' id='direccion_form' name='name_direccion_form' value='$row[direccion]'/>
                 <input type='hidden' id='piso_form' name='name_piso_form' value='$row[piso]'/>
                 <input type='hidden' id='depto_form' name='name_depto_form' value='$row[depto]'/>
                 <input type='hidden' id='codigo_postal_form' name='name_codigo_postal_form' value='$row[codigo_postal]'/>
                 
             <input class='button' type='submit'  value='Eliminar Propiedad' />
             
        </form>";
           $sql_subasta = "SELECT id_propiedad  FROM propiedades_subasta WHERE id_propiedad=$row[id_propiedad] LIMIT 1 ";
           $result_subasta = $link->query($sql_subasta);
           
           if ($result_subasta->num_rows > 0) {
               echo "<form method='POST' action='deshabilitar_subasta.php' enctype='multipart/form-data' name='deshabilitar_subasta_form'>
               
                 <input type='hidden' id='id_propiedad_form' name='name_id_propiedad_form' value='$row[id_propiedad]'/>
                <input type='hidden' id='nombre_form' name='name_nombre_form' value='$row[nombre]'/>
                <input type='hidden' id='numero_form' name='name_numero_form' value='$row[numero]'/>
                <input type='hidden' id='direccion_form' name='name_direccion_form' value='$row[direccion]'/>
                 <input type='hidden' id='piso_form' name='name_piso_form' value='$row[piso]'/>
                 <input type='hidden' id='depto_form' name='name_depto_form' value='$row[depto]'/>
                 <input type='hidden' id='codigo_postal_form' name='name_codigo_postal_form' value='$row[codigo_postal]'/>
                 
             <input class='button' type='submit'  value='Deshabilitar Subasta' />
             
        </form>";
               
               
           }else{
               echo "<form method='POST' action='habilitar_subasta.php' enctype='multipart/form-data' name='habilitar_subasta_form'>
               
                 <input type='hidden' id='id_propiedad_form' name='name_id_propiedad_form' value='$row[id_propiedad]'/>
                <input type='hidden' id='nombre_form' name='name_nombre_form' value='$row[nombre]'/>
                <input type='hidden' id='numero_form' name='name_numero_form' value='$row[numero]'/>
                <input type='hidden' id='direccion_form' name='name_direccion_form' value='$row[direccion]'/>
                 <input type='hidden' id='piso_form' name='name_piso_form' value='$row[piso]'/>
                 <input type='hidden' id='depto_form' name='name_depto_form' value='$row[depto]'/>
                 <input type='hidden' id='codigo_postal_form' name='name_codigo_postal_form' value='$row[codigo_postal]'/>
                 
             <input class='button' type='submit'  value='Habilitar Subasta' />
             
        </form>";
           }
           
           
           
       }
       

       
       
   }
   
   ?>





</div>
</body>
</html>
