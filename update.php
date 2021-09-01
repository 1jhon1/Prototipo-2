<?php

include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$Nombre_del_producto=$_POST['Nombre_del_producto'];
$Precio=$_POST['Precio'];
$Imagen=$_POST['Imagen'];

$sql="UPDATE Productos SET  Nombre_del_producto='$Nombre_del_producto',Precio='$Precio',Imagen='$Imagen' WHERE ID ='$ID' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>