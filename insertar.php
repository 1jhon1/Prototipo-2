<?php
include("conexion.php");
$con=conectar();

$ID=$_POST['ID'];
$Nombre_del_produto=$_POST['Nombre_del_producto'];
$Precio=$_POST['Precio'];
$Imagen=$_POST['Imagen'];


$sql="INSERT INTO Productos VALUES('$ID','$Nombre_del_produto','$Precio','$Imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>