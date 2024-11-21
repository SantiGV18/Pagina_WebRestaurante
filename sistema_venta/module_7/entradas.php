<?php
        include("../connection/connection.php");

        $ver =  "SELECT id_entrada,fecha_entrada,factura_entrada,cant_entrada,valor_entrada,
                usuarios.nomb_usuario, proveedores.nomb_proveedor, productos.nomb_producto
                from entradas
                inner join usuarios
                on entradas.idusuario_entrada = usuarios.id_usuario
                inner join proveedores
                on entradas.idprov_entrada = proveedores.id_proveedor
                inner join productos
                on entradas.idproducto_entrada = productos.id_producto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOTXWARE</title>
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
                <h1>Entradas</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_entradas.php" method="post" class="form-usuarios">
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
                            <select name="prov" required class="input-2">
                                <option selected disabled>Proveedor</option>
<?php
        $view = "SELECT  * FROM proveedores";
        $ejecutar = mysqli_query($connection,$view) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['id_proveedor'] ?>">
                                 <?php echo $opciones['nomb_proveedor'] ?>
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
                            <th>ID Entrada</th>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>Responsable</th>
                            <th>Proveedor</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Valor</th>
                        </tr>
                        <?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                        <tr>
                            <td><?php echo $row["id_entrada"] ?></td>
                            <td><?php echo $row["fecha_entrada"] ?></td>
                            <td><?php echo $row["factura_entrada"] ?></td>
                            <td><?php echo $row["nomb_usuario"] ?></td>
                            <td><?php echo $row["nomb_proveedor"] ?></td>
                            <td><?php echo $row["nomb_producto"] ?></td>
                            <td><?php echo $row["cant_entrada"] ?></td>
                            <td>$ <?php echo $row["valor_entrada"] ?></td>
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