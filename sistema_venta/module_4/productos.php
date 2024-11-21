<?php
        include("../connection/connection.php");

        $ver =  "SELECT productos.*, presentaciones.nomb_present
                FROM productos
                inner join presentaciones
                on productos.idpresent_producto = presentaciones.id_present";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas</title>
    <link rel="shotcut icon" type="image/x-icon" href="https://media.discordapp.net/attachments/1000940721706127430/1011867434698952745/bw-removebg-preview.png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../logic/logic.js">
</head>
<body>
    <section class="cont-beginning">
        <div class="cont-headline">
            <div class="cont-logo">
                <img src="../images/boxtware.png" alt="">
            </div>
            <div class="cont-title">
                <h1>Productos</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_productos.php" method="post" class="form-clientes">
                        <input class="input-1" type="text" placeholder="Referencia" name="ref"  required>
                        <input class="input-1" type="text" placeholder="Producto"   name="prod" required>
                            <select name="present" required class="input-1">
                                <option selected disabled>Presentación</option>
<?php
        $present = "SELECT * FROM presentaciones";
        $ejecutar = mysqli_query($connection,$present) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['id_present'] ?>">
                                 <?php echo $opciones['nomb_present'] ?>
                </option>

<?php endforeach ?>
                            </select>

                        <button type="submit" class="color-1">Registrar</button>
                        <button type="reset"  class="color-2">Cancelar</button>
                    </form>

                    <br> <br>

                 <a href="http://localhost/sistema_venta/menu.html">Atras</a> 
                </div>
                <div class="cont-tablas">
                    <table class="table-2">
                        <tr>
                            <th>ID Producto</th>
                            <th>Referencia</th>
                            <th>Producto</th>
                            <th>Presentación</th>
                        </tr>
                        <?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                        <tr>
                            <td><?php echo $row["id_producto"] ?></td>
                            <td><?php echo $row["ref_producto"] ?></td>
                            <td><?php echo $row["nomb_producto"] ?></td>
                            <td><?php echo $row["nomb_present"] ?></td>
                        </tr>
<?php   } mysqli_free_result($resultado);    ?>
                    </table>
                </div>
            </section>
    </section>

    <footer>

    </footer>
    <script src="./logic/logic.js"></script>
</body>
</html>