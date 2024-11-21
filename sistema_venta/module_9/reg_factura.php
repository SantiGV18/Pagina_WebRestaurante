<?php
error_reporting(0);

    include("../connection/connection.php");

    $doc        = $_POST["doc"];
    $nomb       = $_POST["nomb"];
    $apell      = $_POST["apell"];
    $tel        = $_POST["tel"];
    $correo     = $_POST["correo"];
    $dir        = $_POST["dir"];
    $ciudad     = $_POST["ciudad"];
    
    $registrar =    "INSERT INTO clientes(id_cliente,nomb_cliente,apell_cliente,tel_cliente,
                    correo_cliente,dir_cliente,idciudad_cliente)
                    values ('$doc','$nomb','$apell','$tel','$correo','$dir','$ciudad')";

$connection = mysqli_connect("localhost","root","","sistema_venta_db");

$resultados =  mysqli_query($connection,$registrar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($connection);

echo "<script>window.location = '/sistema_venta/module_2/clientes.php'; </script>";

?>