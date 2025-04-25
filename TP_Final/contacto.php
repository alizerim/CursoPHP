<?php include('header.php'); ?>

<body>
    <section class="contacto_box"><!--formulario contacto -->
        <h1> Contacto</h1>
        <div>
            <form action="enviar_consulta.php" method="post" class="form">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="contacto_input" required>

                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="contacto_input" required>

                <label for="edad">Edad</label>
                <input type="number" name="edad" class="contacto_input" required>

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" class="contacto_textarea" rows="4" required></textarea>

                <input type="submit" value="Enviar Mensaje ✉️" class="btn_enviar">
            </form>

            <?php
            if (isset($_GET['ok'])) {
                echo "<h3 class='mensaje_ok'>¡Su mensaje se envió correctamente!</h3>";
            }
            ?>
        </div>

    </section><!--formulario mail-->
    <section class="contacto_box">
        <h1> Enviar un Correo</h1>
        <div>
            <form action="enviar_correo.php" method="post" class="form">
                <label for="destinatario">Destinatario</label>
                <input type="email" name="destinatario" class="contacto_input" required>

                <label for="asunto">Asunto</label>
                <input type="text" name="asunto" class="contacto_input" required>

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" class="contacto_textarea" rows="4" required></textarea>

                <input type="submit" value="Enviar Correo ✉️" class="btn_enviar">
            </form>

            <?php
            if (isset($_GET['correo_enviado'])) {
                echo "<h3 class='mensaje_ok'>¡El correo se envió correctamente!</h3>";
            } elseif (isset($_GET['error'])) {
                echo "<h3 class='mensaje_error'>Hubo un error al enviar el correo. Por favor, inténtalo de nuevo.</h3>";
            }
            ?>
        </div>
    </section>


</body>

</html>