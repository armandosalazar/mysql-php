<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "php_db", 8889);

//var_dump($mysqli->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC)[0]["id"]);
//var_dump($mysqli->query("SELECT * FROM users")->fetch_all(MYSQLI_NUM));
//var_dump($mysqli->query("SELECT * FROM users")->fetch_all(MYSQLI_BOTH)[0]);
