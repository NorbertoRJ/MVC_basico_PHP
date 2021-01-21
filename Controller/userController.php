<?php

//incluimo el archivo del modelo para la conexión con la base de datos
require('Model/Conexion.php');

//creamos una instancia de la clase conexión
$con = new Conexion();

//obtenemos los usuarios y los guardamos en la variables $usuarios
$usuarios = $con ->getUsers();

//incluimos el archivo de la vista para que tenga acceso a $usuarios y podamos pintar el resultado
require('View/userView.php');

?>
