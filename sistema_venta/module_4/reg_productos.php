<?php
//error_reporting(0);

    include("../connection/connection.php");

    $ref        = $_POST["ref"];
    $prod       = $_POST["prod"];
    $present    = $_POST["present"];
    
    
    $registrar =    "INSERT INTO productos(ref_producto,nomb_producto,idpresent_producto)
                    values ('$ref','$prod','$present')";

$connection = mysqli_connect("localhost","root","","sistema_venta_db");

$resultados =  mysqli_query($connection,$registrar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($connection);

echo "<script>window.location = '/sistema_venta/module_4/productos.php'; </script>";
