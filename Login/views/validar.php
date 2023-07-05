<?php 
require_once '../class/Usuario6.php';
require_once '../class/UsuarioControl.php';

$obj = new UsuarioControl();
$allUsers = $obj->list_user2();

$email=isset($_POST['email']) ? $_POST['email']: "";
$contrasena=isset($_POST['contra']) ? $_POST['contra']: "";

foreach ($allUsers as $key) {
    if($key->getCorreo() === $email && $key->getUsuario() === $contrasena){
        header("location: logueado.php");
    }
        echo "usuario o contraseña incorrectos";
    
}