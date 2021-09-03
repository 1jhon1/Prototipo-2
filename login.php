<?php 
    include("conexion.php");
    $con=conectar();
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Login</h1>
                                <form action="login.php" method="POST">

                                    <input type="email" class="form-control mb-3" name="ID" placeholder="Correo">
                                    <input type="password" class="form-control mb-3" name="Nombre_" placeholder="contraseña">
                                    <a href="producto.php" class="btn btn-info">Ingresar</a> 
                                    <a href="registro.php" class="btn btn-info">registrarse</a>
                                </form>
                        </div>

                      
                    </div>  
            </div>
    </body>
</html>