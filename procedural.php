<?php
$mysqli = mysqli_connect("127.0.0.1", "root", "root", "php_db", 8889);

echo var_dump(mysqli_affected_rows($mysqli)) . "<br>";
$result = mysqli_query($mysqli, "SELECT 1 + 1 AS result");
echo var_dump(mysqli_affected_rows($mysqli)) . "<br>";

//var_dump(mysqli_fetch_assoc($result));
var_dump(mysqli_fetch_object($result)->result);
print "<br>";

# Nota sobre mysqli procedimental:
# Se pueden ejecutar todas las funciones como si fuera pdo.
# Ejemplo: $mysql->fetch_assoc($result);

mysqli_close($mysqli);