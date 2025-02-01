<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMA V</title>
</head>
<body>
    <h1>Bienvenido a programacion 5</h1>

    <?php 
    echo "<h1>Ola texto oculto</h1>";
    ?>
    <form action="capturarRegistro.php" method="POST">
    <label for="">Nombres</label>
    <input type="text" name="nombres" id="" placeholder="Ingresa tus nombres"><br>
    <label for="">Apellidos</label>
    <input type="text" name="apellidos" id="" placeholder="Ingresa tus apellidos"><br>
    <label for="">Usuario</label>
    <input type="text" name="usuario" id="" placeholder="Ingresa tu nombre de usuario"><br>
    <label for="">Clave</label>
    <input type="password" name="clave" id="" placeholder="Ingresa tu nombre de usuario"><br>
    <button type="submit">Enviar Datos</button>
    </form>


</body>
</html>