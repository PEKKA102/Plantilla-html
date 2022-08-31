<?php
include("conexion.php");
$con=conectar();

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$sql="INSERT INTO usuarios VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>