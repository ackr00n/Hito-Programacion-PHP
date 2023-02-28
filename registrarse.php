<?php
    require_once('db.php');
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];


    $consulta = "INSERT INTO `usuarios` (id,email, password) VALUES (NULL, ?, MD5(?));"; 
    $insertar = $conn->prepare($consulta);
    $resultado = $insertar->execute([$correo,$contraseña]);
    header('location:login.php');
?>