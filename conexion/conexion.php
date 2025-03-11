<?php
//parametros de conexion
$host = "127.0.0.1"; //Especifica el servidor donde está la base de datos (normalmente "localhost" si está en la misma máquina).
$usuario = "root"; //Usuario con permisos para acceder a la base de datos.
$contraseña = ""; //Contraseña de acceso a MySQL (en servidores locales suele estar vacía por defecto).
$base_de_datos = "pagina"; // nombre de la base de datos

//crear la conexion
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos); // crea una nueva conexion a la base de datos mysqli

//verificar la conexion
if ($conn->connect_error) { //verifica si hubo un error en la conexión.
    die("error de conexión: " . $conn->connect_error); //Si hay un error, se usa die() para terminar la ejecución del script y mostrar un mensaje de error.
}
?>



