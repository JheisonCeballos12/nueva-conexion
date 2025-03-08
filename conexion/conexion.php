<?php
//parametros de conexion
$host = "127.0.0.1";
$usuario = "root";
$contraseña = "";
$base_de_datos = "pagina";

//crear la conexion
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos);

//verificar la conexion
if ($conn->connect_error) {
    die("error de conexión: " . $conn->connect_error);
}
?>



