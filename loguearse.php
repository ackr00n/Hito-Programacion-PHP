<?php
require_once('db.php');

$correo = $_POST['email'];
$pass = $_POST['pass'];


if($correo=="admin@admin.es" and $pass=="admin"){
    header('location:actualizar.php');
    session_start();
    $_SESSION['token'] = session_id();
}else{
    echo('Error de login');
}
?>