<?php
//error_reporting(0);

    include("../connection/connection.php");

    $fecha      = $_POST["fecha"];
    $fact       = $_POST["fact"];
    $resp       = $_POST["resp"];
    $prov       = $_POST["prov"];
    $prod       = $_POST["prod"];
    $cant       = $_POST["cant"];
    $val        = $_POST["val"];
    
    
    $registrar =    "INSERT INTO entradas(fecha_entrada,factura_entrada,idusuario_entrada,idprov_entrada,
                    idproducto_entrada,cant_entrada,valor_entrada)
                    values ('$fecha','$fact','$resp','$prov','$prod','$cant','$val')";

$connection = mysqli_connect("localhost","root","","sistema_venta_db");

$resultados =  mysqli_query($connection,$registrar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($connection);

echo "<script>window.location = '/sistema_venta/module_7/entradas.php'; </script>";