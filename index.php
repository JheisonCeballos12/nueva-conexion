<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="controladores\company.php"method="post" >
    <h1>company</h1>
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" required >

    <label for="dirección">dirección</label>
    <input type="text" name="dirección" id="dirección" required >

    <label for="celular">celular</label>
    <input type="number" name="celular" id="celular" required >
    
    <input type="submit" value="guardar">
</form>

<form action="controladores/marcas.php"method="post" >
<h1>marcas</h1>
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" required >
    
    <input type="submit" value="guardar">
</form>

<form action="controladores/categorias.php"method="post" >
<h1>categorias</h1>
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" required >
    
    <input type="submit" value="guardar">
</form>
    
    
</body>
</html>