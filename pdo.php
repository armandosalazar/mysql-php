<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "php_db", 8889);

echo var_dump($mysqli->affected_rows) . "<br>";
$result = $mysqli->query("SELECT 1 + 1 AS result");
echo var_dump($mysqli->affected_rows) . "<br>";

var_dump($result->fetch_assoc()["result"]);
//var_dump($result->fetch_object()->result);
//var_dump(mysqli_fetch_object($result)->result);

# Nota sobre mysqli pdo:
# Se pueden ejecutar todas las funciones como si fuera procedimental.
# Ejemplo: mysqli_fetch_assoc($result)->result;

$mysqli->close();