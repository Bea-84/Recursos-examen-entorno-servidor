<?php

session_start();//inicia sesión

//si existe se almacena en variable
if (isset($_POST["usuario"])) {
    $nombre = $_POST["usuario"];
    $_SESSION['usr'] = $nombre;


} else {
    echo "No se recibió el nombre del usuario.";
}


?>

<p>Bienvenido/a <?=$nombre?></p>

