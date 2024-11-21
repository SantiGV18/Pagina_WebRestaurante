<?php
error_reporting(0);

    include("../connection/connection.php");

    $ciudad = $_POST["ciudad"];
    
    $registrar =    "INSERT INTO ciudades(nomb_ciudad)
                    values ('$ciudad')";

$connection = mysqli_connect("localhost","root","","sistema_venta_db");

$resultados =  mysqli_query($connection,$registrar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($connection);

echo "<script>window.location = '/sistema_venta/module_1/ciudades.php'; </script>";

?>