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
		<link rel="stylesheet" href="css/home.css">
  
     
   
      <title>Home Sweet Home - Subastas | Vulcan Code</title>
     
    </head>
    <body>
    
 
<div class='div_body'>
<?php
include ("db.php");
$link = conectar();

$fecha=date("Y-m-d"); 



$sql_subastas="SELECT id_propiedad,precio_base,semana,fecha_ingreso FROM propiedades_subasta WHERE DATE( fecha_egreso ) > $fecha";
$result_subasta = $link->query($sql_subastas);
if ($result_subasta->num_rows > 0) {
    
  
    
    while ($row_subasta=$result_subasta->fetch_assoc()){
    
    $sql = "SELECT id_propiedad,nombre,numero,direccion,piso,depto,codigo_postal,provincia,localidad  FROM propiedades WHERE id_propiedad=$row_subasta[id_propiedad]";
    $result = $link->query($sql);
    
    
    while ($row = $result->fetch_assoc()) {
        
        //////////////////////////Consulta monto max//////////////////////////////////////
        
        $year=date('Y', strtotime($row_subasta['fecha_ingreso']));
        
      
        $sql_monto_max="SELECT MAX(monto) as monto_maximo FROM `subasta_{$row['id_propiedad']}_{$row['nombre']}_{$row_subasta['semana']}_{$year}`";
        $result_monto_max = $link->query($sql_monto_max);
        
        
        $monto_ofertado=$row_subasta['precio_base'];
        $monto_ofertado=$monto_ofertado + 10;
        
       
        if ($row_monto_max = $result_monto_max->fetch_assoc()){
                  
            $monto_actual=$row_monto_max['monto_maximo'];
           
        }
       
        
        if ( !empty($row_monto_max['monto_maximo'])) {
            $monto_ofertado=$monto_actual + 10;
        }
       
        ////////////////////////Fin Consulta monto max/////////////////////////////////////
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
                    <th>Precio base</th>
                    <th>Precio actual</th>
                    <th>Semana</th>
            

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
                    <td data-label='Precio base'>$row_subasta[precio_base]</td>
                    <td data-label='Precio actual'>$monto_actual</td>
                    <td data-label='Semana'>$row_subasta[semana]</td>

                </tr>
               </tbody>
               
               
            </table>";
        
       
      
     
        
      
      
      
        
        echo "<form method='POST' action='ofertar.php' enctype='multipart/form-data' name='ofertar_form'>
        
                 <input type='hidden' id='id_propiedad_form' name='name_id_propiedad_form' value='$row[id_propiedad]'/>
                <input type='hidden' id='nombre_form' name='name_nombre_form' value='$row[nombre]'/>
                <input type='hidden' id='numero_form' name='name_numero_form' value='$row[numero]'/>
                <input type='hidden' id='direccion_form' name='name_direccion_form' value='$row[direccion]'/>
                 <input type='hidden' id='piso_form' name='name_piso_form' value='$row[piso]'/>
                 <input type='hidden' id='depto_form' name='name_depto_form' value='$row[depto]'/>
                 <input type='hidden' id='codigo_postal_form' name='name_codigo_postal_form' value='$row[codigo_postal]'/>
                <input type='hidden' id='semana_form' name='name_semana_form' value='$row_subasta[semana]'/>
                <input type='hidden' id='precio_base_form' name='name_precio_base_form' value='$row_subasta[precio_base]'/>
                <input type='hidden' id='year_form' name='name_year_form' value='$year'/>
                <input type='text' name='name_monto_ofertado_form' value='$monto_ofertado' placeholder='Monto ofertado' />
                 
             <input class='button' type='submit'  value='Ofertar Subasta' />";       
    }
}
}


?>

 <a href="home.php">Inicio</a> 
  <a href="subastas.php">Ver subastas</a> 
   <a href="hotsales.php">Ver hotsales</a> 
   
   
  




</div>
</body>
</html>
