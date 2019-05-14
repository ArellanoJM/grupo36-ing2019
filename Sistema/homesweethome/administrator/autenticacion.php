<?php
if($_POST){
$email_form = utf8_decode($_POST['email_form']);
$clave_form = utf8_decode($_POST['clave_form']);
}

$email = $email_form;
if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    echo '<script>window.location="../index.php?m=1";</script>';
    exit();
}
?>
