<?php include('header.php'); ?>

<?php
// Lista de ciudades a las que se hacen envíos (probar con estas)
$ciudades_con_envio = ["Capital Federal", "Buenos Aires", "Cordoba Capital", "Rosario"];

//control en la lista       
$respuesta = '';
if (isset($_GET['ciudad'])) {
    $ciudad = trim($_GET['ciudad']); // Elimina espacios 
    if (in_array(ucwords(strtolower($ciudad)), $ciudades_con_envio)) { // Normaliza el texto para procesarlo
        $respuesta = "<div class='mensaje_ok'>¡Sí, hacemos envíos a <strong>$ciudad</strong>!</div>";
    } else {
        $respuesta = "<div class='mensaje_error'>Lo sentimos, no hacemos envíos a <strong>$ciudad</strong>.</div>";
    }
}
?>

<div class="contacto_box">
    <h1>Consulta de Envíos</h1>
    
    <!-- Formulario -->
    <form method="GET" class="form" action="">
        <label for="ciudad">¿Hacemos envíos a tu ciudad?</label>
        <input type="text" name="ciudad" id="ciudad" class="contacto_input" required>
        <button type="submit" class="btn_enviar">Consultar</button>
    </form>

    <!-- Respuesta -->
    <?php if (!empty($respuesta)): ?>
        <div><?php echo $respuesta; ?></div>
    <?php endif; ?>
</div>
