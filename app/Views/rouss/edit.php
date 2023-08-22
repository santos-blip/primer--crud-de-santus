<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
 <form action="update/<?= $pelicula['IDcliente'] ?>" method="post">
    <label for="NombreCliente">Nombre</label>
    <input type="text" name="NombreCliente" placeholder="NombreCliente" id="NombreCliente" value="<?= $pelicula['NombreCliente']?>">
    <label for="ApellidoCliente">Apellido</label>
    <input type="text" name="ApellidoCliente" placeholder="ApellidoCliente" id="ApellidoCliente" value="<?= $pelicula['ApellidoCliente']?>">
    <button type="submit">modificar</button>
 </form>   
</body>
</html>