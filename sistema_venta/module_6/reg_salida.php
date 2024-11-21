<?php
//error_reporting(0);

    include("../connection/connection.php");

    $fecha      = $_POST["fecha"];
    $fact       = $_POST["fact"];
    $resp       = $_POST["resp"];
    $cliente    = $_POST["cliente"];
    $prod       = $_POST["prod"];
    $cant       = $_POST["cant"];
    $val        = $_POST["val"];
    
    
    $registrar =    "INSERT INTO salidas(fecha_salida,idusuario_salida,idcliente_salida,idfactura_salida,
                    idproducto_salida,cant_salida,valor_salida)
                    values ('$fecha','$fact','$resp','$cliente','$prod','$cant','$val')";

$connection = mysqli_connect("localhost","root","","sistema_venta_db");

$resultados =  mysqli_query($connection,$registrar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($connection);

echo "<script>window.location = '/sistema_venta/module_6/salidas.php'; </script>";