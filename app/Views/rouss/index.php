<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ilon santus</title>
</head>
<body>
    <h1>cursos de programacion</h1>
    <a href="pelicula/new">crear</a> 
 <table>
    <tr>
    <th>ID</th>
    <th>NOMBRES</th>
    <th>Apellidos</th>
    <th>OPCIONES</th>
    </tr>
    <?php foreach ($peliculas as $key => $p) :?>
        <tr>
    <td><?= $p['IDcliente'] ?></td>
    <td><?= $p['NombreCliente'] ?></td>
    <td><?= $p['ApellidoCliente'] ?></td>
   
    <td>
    <a href="pelicula/show/<?= $p['IDcliente'] ?>">show</a>
    <a href="pelicula/edit/<?= $p['IDcliente'] ?>">edit</a>   
       <form action="pelicula/delete/<?= $p['IDcliente'] ?>" method="post">  
       <button type="submit">delete</button>
       </form>
      
       </td>
    </tr>
    <?php endforeach?>
    </table>
</body>
</html>
