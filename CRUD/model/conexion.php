<?php
$contraseña = "";
$usuario = "root";
$nombre_bd = "crud";

try {
    $bd = mysqli_connect("localhost", $usuario, $contraseña, $nombre_bd);
} catch (Exception $e) {
    echo "Problema con la conexión: " . $e->getMessage();
}
?>
