<?php
session_start();
//error_reporting(0);
include("../connection/connection.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$_SESSION['usuario'] = $usuario;

$consulta = "SELECT * FROM usuarios where doc_usuario ='$usuario' and cont_usuario ='$contraseña'";
$resultado = mysqli_query($connection, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['idrol_usuario'] == '2') { //cajero
    header("location:../clientes.php");
} else
if ($filas['idrol_usuario'] == '3') { //aux
    header("location:../operarios.php");
} else 
    if ($filas['idrol_usuario'] == '1') { //admin
        header("location:../menu.html");
    } else {echo "<script>alert('" .'Invalid username or password' . "' );</script>";
       
?>
   
    <?php
    echo "<script>window.location = '/sistema_venta/index.html';</script>";
    ?>

<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>