<?php

class Conexion
{
    //variable $con
    private $con;

    public function __construct()
    {
        //creamos en dentro del constructor la conexión a la bd para que cada vez que instanciemos la clase se abra una conexión y podamos ejecutar consultas
        $this -> con = new mysqli('localhost','root','','mvcphp');
    }
    //funcion para obtener todas las filas de la tabla 'usuarios'
    public function getUsers()
    {
        //ejecutamos la consulta mediante la variable con que abre la conexión a la bd y el resultado lo guardamos en $query
        $query = $this -> con -> query('SELECT * FROM usuarios');
        //declaramos un arreglo vacio para retornarlo con los datos obtenidos de $query
        $retorno = [];
        //contador
        $i=0;
        //Ciclo while que recorrera cada elemento de $query, colocando el valor de cada iteración en $fila
        while($fila = $query -> fetch_assoc())
        {
            //guardamos en $retorno en la posición $i dependiendo la iteración el valor de $fila
            $retorno[$i] = $fila;
            //incrementamos el contador
            $i++;
        }
        //retornamos la variable $retorno con la información de la consulta en un arreglo, para que el controlador pueda enviarselo a la vista
        return $retorno;
    }
}

?>