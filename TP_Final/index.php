<?php include('header.php');?>

    <?php
    // Variables
    $texto = "prueba escrita ";
    $unidades = 7;
    $unidad_decimal = 2.5;

    // Operadores
    $suma = $unidades + $unidad_decimal;
    $resta = $unidades - $unidad_decimal;
    $multiplicacion = $unidades * $unidad_decimal;
    $division = $unidades / $unidad_decimal;
    $modulo = $unidades % 3;
    $exponente = $unidades ** 2;
    $concatenacion = $texto . $unidades;
    ?>

    <div class="contenido">
        <h2> Prueba de Operadores</h2>
        <ul>
            <li>Unidad1 = <?php echo $unidades; ?></li>
            <li>Unidad2 = <?php echo $unidad_decimal; ?></li>
            <li>Variable de Texto = <?php echo $texto; ?></li>
            <li>Suma: <?php echo $suma; ?></li>
            <li>Resta: <?php echo $resta; ?></li>
            <li>Multiplicación: <?php echo $multiplicacion; ?></li>
            <li>División: <?php echo $division; ?></li>
            <li>Módulo (resto de la división U1 entre 3): <?php echo $modulo; ?></li>
            <li>Exponente (unidad1 al cuadrado): <?php echo $exponente; ?></li>
            <li>Concatenacion (texto y numero): <?php echo $concatenacion; ?></li>
        </ul>
    </div>

    <section>
        <h3> Prueba con Constantes y Arrays</h3>
        <?php
        // CONSTANTES
        define("MINIMO", 0);
        const PI = 3.14;

        // Arrays
        $menu = ["pizza", "ñoquis", "empanadas", 100, PI];
        echo "<hr>";
        echo "Muestra con var_dump()";
        echo "<pre>";
        var_dump($menu);
        echo "</pre>";
        echo "Muestra con print_r()";
        echo "<pre>";
        print_r($menu);
        echo "</pre>";


        ?>
    </section>
</body>

</html>