
<?php
session_start();//inicia o reanuda sesion

//después verificamos si existe variable 
if (isset($_SESSION['usr'])) {
    //si existe se recupera su valor
    $nombre = $_SESSION['usr'];
    echo "Sesión cerrada correctamente. Hasta luego, $nombre!";
     // Destruir la sesión de usuario después de mostrar el mensaje
     session_destroy();
      // Restablece el contador de clics a cero
    setcookie("numero", "0", time() + (86400 * 30), "/");

} else {
    echo "No se encontró una sesión activa.";
}
?>

