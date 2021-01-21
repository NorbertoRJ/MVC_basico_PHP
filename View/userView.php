<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body>
<!-- Creamos una tabla para pintar el resultado de la variables $usuarios que nos devolvio el controlador -->
    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Recorremos cada elemento que se encuentra en $usuarios como un arreglo asociativo con el mismo nombre de las columnas que tenemos en la base de datos
                foreach($usuarios as $usuario)
                {
                    echo "<tr>";
                        echo "<td>". $usuario['user'] ."</td>";
                        echo "<td>". $usuario['password'] ."</td>"; 
                        echo "<td>". $usuario['name'] ."</td>"; 
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>