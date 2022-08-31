<?php

include("conexion.php");
$con=conectar();

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$sql="UPDATE usuarios SET nombre_completo='$nombre_completo', correo='$correo', usuario='$usuario', contrasena='$contrasena' WHERE='$nombre_completo'";
$query= mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>

