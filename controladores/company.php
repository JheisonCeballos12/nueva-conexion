<?php
//incluir al archivo de conexion
include '../conexion/conexion.php'; //Este include importa el archivo conexion.php, que contiene la configuración para conectarse a la base de datos.
                                    //Esto evita repetir el código de conexión en múltiples archivos y facilita la administración.

//recoger los datos del formulario 
//Verificar si los datos del formulario fueron enviados
if (isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['celular'])) { //$_POST es un array en PHP que contiene los datos enviados desde un formulario HTML mediante el método POST.
                                                                                         //Se verifica si los campos nombre, direccion y celular han sido enviados antes de continuar.  
    
    //nota: en la tabla se usa el campo "nombre" (posible error nombregrafico)
    //Asignar los valores del formulario a variables
    $nombre=$_POST['nombre']; //Se almacenan los datos del formulario en variables de PHP.
    $direccion=$_POST['direccion']; //Se almacenan los datos del formulario en variables de PHP.
    $celular=$_POST['celular']; //Se almacenan los datos del formulario en variables de PHP.

    //consulta SGL para insertar datos en la tabla "personas"
    //Construcción de la consulta SQL
    {$sql="INSERT INTO company (nombre, direccion, celular) VALUES ('$nombre', '$direccion', '$celular')";} //Esta consulta SQL inserta los datos en la tabla company.
                                                                                                            //El error más notable aquí es el uso de direccion con tilde en el nombre del campo de la base de datos. En SQL, los nombres de columnas no deben contener caracteres especiales como ñ o tildes.

     //Ejecutar la consulta y redirigir                                                                                                       
    if ($conn->query($sql) === TRUE) { //query($sql) ejecuta la consulta SQL en la base de datos.

    //echo "registro insertado exitosamente";
    header("location: ../index.php"); //Si la consulta se ejecuta correctamente, se redirige al usuario a index.php.
    } else {
        echo"error:" . $sql . "<br>" . $conn->error; //Si hay un error, se muestra un mensaje de error junto con la consulta SQL que falló.
    }
}

//cerrar la conexion a la base de datos
$conn->close();
?>