<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
        
</head>
<body>

</body>
</html>
<?php
require_once '../class/UsuarioControl.php';
require_once '../class/Usuario6.php';

$nombre = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$user = isset($_POST['user']) ? $_POST['user'] : "";
$password = isset($_POST['contra']) ? $_POST['contra'] : "";

$auditoria = date("Y-m-d H:i:s");

$us_control = new UsuarioControl();

$obj = new Usuario($nombre, $email, $password, $user, $auditoria);
?>

 <?php
$us_control->insert_user($obj);
?>
<script>
    
    alert("Haz creado tu cuenta con exito");
    window.location.href = "index.php";
</script>
