<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = trim($_POST['destinatario']);
    $asunto = trim($_POST['asunto']);
    $mensaje = trim($_POST['mensaje']);
    $cabeceras = "From: no-reply@tusitio.com";

    // Envío del correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        header("Location: contacto.php?correo_enviado=1");
        exit;
    } else {
        header("location: contacto.php?ok");
        exit;
    }
}
?>
