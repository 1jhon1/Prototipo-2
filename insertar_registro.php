<?php
include("conexion.php");
$con=conectar();

$Correo=$_POST['correo'];
$Contraseña=$_POST['contraseña'];



$sql="INSERT INTO registro VALUES('$Correo','$Contraseña')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: login.php");
    
}else {
}
?>