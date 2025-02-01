<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    echo "<h1>Los Datos Recepcionados son: </h1>";
    echo "Nombres: " . htmlspecialchars($nombres) . "<br>";
    echo "Apellidos: " . htmlspecialchars($apellidos) . "<br>";
    echo "Usuario: " . htmlspecialchars($usuario) . "<br>";
    echo "Clave: " . htmlspecialchars($clave) . "<br>";
} else {
    echo "Acceso no permitido.";
}


?>