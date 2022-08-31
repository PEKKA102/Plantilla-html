<?php

include("conexion.php");
$con=conectar();

$nombre_completo=$_GET['id'];

$sql="DELETE FROM usuario  WHERE nombre_completo='$nombre_completo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
