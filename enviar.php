<?php

    $destino="ivan_vicencio.l@hotmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono "\nMensaje" . $mensaje;

    mail($destino,"Contactanos", $contenido);
    header("Location:gracias.php");


?>