<?php 
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST["apellido"];
$edad_form = $_POST["edad"];
$mensaje_form = $_POST["mensaje"];

//coneccion BD NpCK1rAD6Vc80lP 
$conexion = mysqli_connect("sql310.infinityfree.com", "if0_38566138", "NpCK1rAD6Vc80lP", "if0_38566138_php_curso") or exit ("no se pudo conectar la BD");
mysqli_query($conexion, "INSERT INTO ejemplo_1 VALUES (DEFAULT,'$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form' );   ");
mysqli_close($conexion);
header("location: contacto.php?ok");

?>