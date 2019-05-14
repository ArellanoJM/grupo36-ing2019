<?php
function conectar(){
    $link = mysqli_connect('127.0.0.1','root','','homesweethome')
    or die("Error".mysqli_error($link));
    
    return $link;
    
}
?>

