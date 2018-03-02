<?php
    $destino= "da@reliae.com";
    $nombre = $_POST["Your_name"];
    $correo = $_POST["Work_email"];
    $telefono= $_POST["Work_phone"];
    $contenido = "Nombre: " . $nombre . "\nCorreo:" . $correo / "\ntelefono" . $telefono;
    mail($destino,"contacto", $contenido);
    header("Location:thanks.html");

 ?>
