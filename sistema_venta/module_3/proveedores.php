<?php
        include("../connection/connection.php");

        $ver =  "SELECT proveedores.*,ciudades.nomb_ciudad
                FROM proveedores
                inner join ciudades
                on proveedores.idciudad_proveedor = ciudades.id_ciudad
                order by nomb_proveedor";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas</title>
    <link rel="shotcut icon" type="image/x-icon" href="C:\xammp\htdocs\sistema_venta\images\B.png">
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
                <h1>Gestionar Proveedores</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_proveedor.php" method="post" class="form-clientes">
                        <input class="input-1" type="text" placeholder="Nit" name="nit">
                        <input class="input-1" type="text" placeholder="Proveedor" name="prov">
                        <input class="input-1" type="text" placeholder="Telefono" name="tel">
                        <input class="input-1" type="text" placeholder="Correo" name="correo">
                        <input class="input-1" type="text" placeholder="Dirección" name="dir">
                            <select name="ciudad" required class="input-1">
                                <option selected disabled>Ciudad</option>
<?php
        $ciudad = "SELECT * FROM ciudades";
        $ejecutar = mysqli_query($connection,$ciudad) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['id_ciudad'] ?>">
                                 <?php echo $opciones['nomb_ciudad'] ?>
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
                            <th>Nit</th>
                            <th>Proveedor</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Dirección</th>
                            <th>Ciudad</th>
                        </tr>
                        <?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                        <tr>
                            <td><?php echo $row["id_proveedor"] ?></td>
                            <td><?php echo $row["nomb_proveedor"] ?></td>
                            <td><?php echo $row["tel_proveedor"] ?></td>
                            <td><?php echo $row["correo_proveedor"] ?></td>
                            <td><?php echo $row["dir_proveedor"] ?></td>
                            <td><?php echo $row["nomb_ciudad"] ?></td>
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