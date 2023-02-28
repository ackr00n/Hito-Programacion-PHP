<?php
require_once('db.php');
$email = $_POST['email']; 
$entrada=$_POST['entrada'];

$consulta = "INSERT INTO `entrada`(email,entrada,id) VALUES (?,?,NULL);"; 
$insertar = $conn->prepare($consulta);
$resultado = $insertar->execute([$email,$entrada]);
header('blog.php');