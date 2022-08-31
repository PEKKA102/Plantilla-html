<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE nombre_completo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="trabajo/css/principal" rel="stylesheet">
        <link href="trabajo/css/blog" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="update.php" method="POST">        
                <input type="hidden" name="nombre_completo" value="<?php echo $row['nombre_completo']  ?>">
                <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena" value="<?php echo $row['contrasena']  ?>">                  
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
                    
        </div>
    </body>
</html>