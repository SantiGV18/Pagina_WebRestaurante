<?php
        include("../connection/connection.php");

        $ver =  "SELECT id_salida,fecha_salida,cant_salida,valor_salida,
                facturas.id_factura, usuarios.nomb_usuario, productos.nomb_producto,
                concat(clientes.nomb_cliente,' ', clientes.apell_cliente) as cliente
                from salidas
                    inner join facturas
                        on salidas.idfactura_salida = facturas.id_factura
                    inner join usuarios
                        on salidas.idusuario_salida = usuarios.id_usuario
                    inner join clientes
                            on salidas.idcliente_salida = clientes.id_cliente
                    inner join productos
                        on salidas.idproducto_salida = productos.id_producto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOXTWARE</title>
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
                <h1>Salidas</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_salida.php" method="post" class="form-usuarios">
                        <input class="input-2" type="date" placeholder="fecha"          name="fecha"  required>
                        <input class="input-2" type="text" placeholder="factura"        name="fact" required>
                        <select name="resp" required class="input-2">
                                <option selected disabled>Responsable</option>
<?php
        $view = "SELECT * FROM usuarios";
        $ejecutar = mysqli_query($connection,$view) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['id_usuario'] ?>">
                                 <?php echo $opciones['nomb_usuario'] ?>
                </option>

<?php endforeach ?>
                            </select>
                            <select name="cliente" required class="input-2">
                                <option selected disabled>Cliente</option>
<?php
        $view = "SELECT  * FROM clientes";
        $ejecutar = mysqli_query($connection,$view) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['id_cliente'] ?>">
                                 <?php echo $opciones['nomb_cliente'] ?>
                </option>

<?php endforeach ?>
                            </select>
                        <select name="prod" required class="input-2">
                                <option selected disabled>Producto</option>
<?php
        $view = "SELECT * FROM productos";
        $ejecutar = mysqli_query($connection,$view) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['id_producto'] ?>">
                                 <?php echo $opciones['nomb_producto'] ?>
                </option>

<?php endforeach ?>
                            </select>
                        <input class="input-2" type="text" placeholder="Cantidad"       name="cant" required>
                        <input class="input-2" type="text" placeholder="$"              name="val" required>

                        
                        <button type="submit" class="color-1">Registrar</button>
                        <button type="reset"  class="color-2">Cancelar</button>
                    </form>

                    <br> 
                    

                 <a href="http://localhost/sistema_venta/menu.html">Atras</a> 
                </div>
                <div class="cont-tablas">
                    <table class="table-2">
                        <tr>
                            <th>ID Salida</th>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>Responsable</th>
                            <th>Cliente</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Valor</th>
                        </tr>
                        <?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                        <tr>
                            <td><?php echo $row["id_salida"] ?></td>
                            <td><?php echo $row["fecha_salida"] ?></td>
                            <td><?php echo $row["id_factura"] ?></td>
                            <td><?php echo $row["nomb_usuario"] ?></td>
                            <td><?php echo $row["cliente"] ?></td>
                            <td><?php echo $row["nomb_producto"] ?></td>
                            <td><?php echo $row["cant_salida"] ?></td>
                            <td><?php echo $row["valor_salida"] ?></td>
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