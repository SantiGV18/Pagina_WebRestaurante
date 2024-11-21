<?php
        include("../connection/connection.php");

        $ver =  "SELECT * FROM salidas";
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
                <img src="../images/botware.png" alt="">
            </div>
            <div class="cont-title">
                <h1>Facturación</h1>
            </div>
        </div>
        <br> <br>

<a href="http://localhost/sistema_venta/menu.html">Atras</a>
            <section class="cont-work-1">
               <div class="cont-tabla-3">
                <table class="tabla-3">
                    <tr>
                        <th>Remision</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Valor</th>
                    </tr>
                    <br> <br>

               
<?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                    <tr>
                        <td><?php echo $row["rem_salida"] ?></td>
                        <td><?php echo $row["idproducto_salida"] ?></td>
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