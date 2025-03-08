<?php
//incluir al archivo de conexion
include '../conexion/conexion.php';

//recoger los datos del formulario
if (isset($_POST['nombre'])) {

    //nota: en la tabla se usa el campo "nombre" (posible error nombregrafico)
    $nombre=$_POST['nombre'];

    //consulta SGL para insertar datos en la tabla "personas"
    $sql="INSERT INTO categorias (nombre) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        header("location: ../index.php");
    } else {
        echo"error:" . $sql . "<br>" . $conn->error;
    }
}

//cerrar la conexion
$conn->close();
?>


