<?php
//incluir al archivo de conexion
include '../conexion/conexion.php';

//recoger los datos del formulario
if (isset($_POST['nombre']) && isset($_POST['dirección']) && isset($_POST['celular'])) {
    
    //nota: en la tabla se usa el campo "nombre" (posible error nombregrafico)
    $nombre=$_POST['nombre'];
    $dirección=$_POST['dirección'];
    $celular=$_POST['celular'];

    //consulta SGL para insertar datos en la tabla "personas"
    $sql="INSERT INTO company (nombre, dirección, celular) VALUES ('$nombre', '$dirección', '$celular')";

    if ($conn->query($sql) === TRUE) {
        //echo "registro insertado exitosamente";
        header("location: ../index.php");
    } else {
        echo"error:" . $sql . "<br>" . $conn->error;
    }
}

//cerrar la conexion
$conn->close();
?>