<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Ususarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="trabajo/css/principal" rel="stylesheet">
        <link href="trabajo/css/blog" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">         
                <div class="col-md-3">
                    <h1>Ingrese datos</h1>
                        <form action="insertar.php" method="POST">
                            <input type="text" placeholder="nombre completo" name="nombre_completo">
                            <input type="text" placeholder="correo Electronico" name="correo">
                            <input type="text" placeholder="usuario" name="usuario">
                            <input type="password" placeholder="contraseña" name="contrasena">      
                            <input type="submit" class="btn btn-primary">
                        </form>
                </div>
                <div class="col-md-8">
                    <table class="table" >
                        <thead class="table-success table-striped" >
                            <tr>
                                <th>nombre_completo</th>
                                <th>correo</th>
                                <th>usuario</th>
                                <th>contraseña</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <th><?php  echo $row['nombre_completo']?></th>
                                <th><?php  echo $row['correo']?></th>
                                <th><?php  echo $row['usuario']?></th>
                                <th><?php  echo $row['contrasena']?></th>    
                                <th><a href="actualizar.php?id=<?php echo $row['nombre_completo'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['nombre_completo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                     </table>
                 </div>
            </div>  
        </div>
    </body>
</html>