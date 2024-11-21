<?php
        include("../connection/connection.php");

        $ver =  "SELECT id_cliente,tel_cliente,correo_cliente,dir_cliente,
                concat(nomb_cliente,' ',apell_cliente) as cliente,
                ciudades.nomb_ciudad
                FROM clientes
                inner join ciudades
                on clientes.idciudad_cliente = ciudades.id_ciudad
                order by apell_cliente";

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
                <h1>Clientes</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_clientes.php" method="post" class="form-clientes">
                        <input class="input-1" type="text" placeholder="Documento" name="doc">
                        <input class="input-1" type="text" placeholder="Nombres" name="nomb">
                        <input class="input-1" type="text" placeholder="Apellidos" name="apell">
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


                    <br>

                 <a href="http://localhost/sistema_venta/menu.html">Atras</a>
                </div>
                <div class="cont-tablas">
                    <table class="table-2">
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
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
                            <td><?php echo $row["id_cliente"] ?></td>
                            <td><?php echo $row["cliente"] ?></td>
                            <td><?php echo $row["tel_cliente"] ?></td>
                            <td><?php echo $row["correo_cliente"] ?></td>
                            <td><?php echo $row["dir_cliente"] ?></td>
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