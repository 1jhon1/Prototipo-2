<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM registro";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body  style="background-size: cover; background-image: url(https://www.startogoweb.com/imagenes/fondoInicio.png); height: 100vh">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registrate</h1>
                                <form action="insertar_registro.php" method="POST">
                                    <input type="email" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="password" class="form-control mb-3" name="contraseña" placeholder="contraseña">
                                                                       
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                      
                    </div>  
            </div>
            <?php
                                           while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php   $Correo?></th>
                                                <th><?php $Contraseña?></th>
                                                                             
                                            </tr>
                                        <?php 
                                            }
                                        ?>
    </body>
</html>