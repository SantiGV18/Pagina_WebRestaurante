<?php
error_reporting(0);

    include("../connection/connection.php");

    $nit        = $_POST["nit"];
    $prov       = $_POST["prov"];
    $tel        = $_POST["tel"];
    $correo     = $_POST["correo"];
    $dir        = $_POST["dir"];
    $ciudad     = $_POST["ciudad"];
    
    $registrar =    "INSERT INTO proveedores(id_proveedor,nomb_proveedor,tel_proveedor,
                    correo_proveedor,dir_proveedor,idciudad_proveedor)
                    values ('$nit','$prov','$tel','$correo','$dir','$ciudad')";

$connection = mysqli_connect("localhost","root","","sistema_venta_db");

$resultados =  mysqli_query($connection,$registrar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($connection);

echo "<script>window.location = '/sistema_venta/module_3/proveedores.php'; </script>";
