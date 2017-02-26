<?php
/*$servidor="localhost";
$usuario="root";
$pwd="alex";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u967136652";
$pwd="";
$BD="u967136652";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
