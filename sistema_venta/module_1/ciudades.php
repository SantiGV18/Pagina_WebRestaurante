<?php
        include("../connection/connection.php");

        $ver = "SELECT * FROM ciudades";

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
                <img src="../images/Boxtware.png" alt="">
            </div>
            <div class="cont-title">
                <h1>Ciudades</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_ciudad.php" method="post" class="form-ciudad">
                        <input type="text" placeholder="Ciudad" name="ciudad" required>
                        <button type="submit" class="color-1">Registrar</button>
                        <button type="reset"  class="color-2">Cancelar</button>
                    </form>
<br> <br>

                 <a href="http://localhost/sistema_venta/menu.html">Atras</a>
                </div>



                <div class="cont-tablas">
                    <table class="table-1">
                        <tr>
                            <th>ID Ciudad</th>
                            <th>Nombre Ciudad</th>
                        </tr>
                        <?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                        <tr>
                            <td><?php echo $row["id_ciudad"] ?></td>
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