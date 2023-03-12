<?php
// Esta es la forma orientada a objetos ósea PDO (Php Data Object)
$mysqli = new mysqli("127.0.0.1", "root", "root", "php_db", 8889);

// La otra forma es la funcional y sería correcto hacerlo de la siguiente manera
function getConnection()
{
    // Para funcional o procedural utilizamos la función mysqli_connect
    error_reporting(0); // Para que no muestre errores
    $connection = mysqli_connect("127.0.0.1", "root", "root", "php_db", 8889) or die("Error " . mysqli_error($connection));
    // Es importante hacerlo como una variable separada, si un error
    return $connection;
}
