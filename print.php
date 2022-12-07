<?php
echo print_r($_GET) . "<br>";
echo var_dump($_GET) . "<br>";
if (isset($_GET["name"])) {
  echo "IS SET";
}
?>

