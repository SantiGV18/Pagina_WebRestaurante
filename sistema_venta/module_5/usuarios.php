<?php
        include("../connection/connection.php");

        $ver =  "SELECT usuarios.*, rol.rol_usuario 
                FROM usuarios
                inner join rol
                on usuarios.id_usuario = rol.rol_usuario";

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
                <img src="../images/boxware.png" alt="">
            </div>
            <div class="cont-title">
                <h1>Usuarios</h1>
            </div>
        </div>
            <section class="cont-work">
                <div class="cont-form-1">
                    <form action="reg_usuarios.php" method="post" class="form-usuarios">
                        <input class="input-2" type="text" placeholder="Documento"  name="doc"  required>
                        <input class="input-2" type="text" placeholder="Nombre"     name="nomb" required>
                        <input class="input-2" type="text" placeholder="Contraseña" name="cont" required>
                        
                        <select name="rol" required class="input-2">
                                <option selected disabled>Roles</option>
<?php
        $rol = "SELECT * FROM rol";
        $ejecutar = mysqli_query($connection,$rol) 
?>
<?php foreach ($ejecutar as $opciones):?>

                <option 
                        value = "<?php echo $opciones['rol_usuario'] ?>">
                                 <?php echo $opciones['rol_usuario'] ?>
                </option>

<?php endforeach ?>
                            </select>
                        <button type="submit" class="color-1">Registrar</button>
                        <button type="reset"  class="color-2">Cancelar</button>
                    </form>
                </div>
                <div class="cont-tablas">
                    <table class="table-2">
                        <tr>
                            <th>ID Usuario</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                        </tr>
                        <?php   
$resultado = mysqli_query($connection, $ver);
        while($row =mysqli_fetch_array($resultado)){
?>
                       
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