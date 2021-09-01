<?php

include("conexion.php");
$con=conectar();

$ID=$_GET['id'];

$sql="DELETE FROM Productos  WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
