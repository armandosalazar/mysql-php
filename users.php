<?php
include_once "db.php";

if (isset($_GET["search"])) {
  if (empty($_GET["search"])) {
    # code...
    echo json_encode([]);
    return;
  } else {
    # code...
    $search = $_GET["search"];
    if ($result = $mysqli->query("SELECT * FROM users WHERE id LIKE '%$search%'")) {
      # code...
      $users = [];
      while ($row = $result->fetch_assoc()) {
        # code...
        $users[] = $row;
      }
      echo json_encode($users);
    } else {
      # code...
      echo json_encode([]);
    }
  }
} else {
  # code...
  $result = $mysqli->query("SELECT * FROM users");
  $users = array();
  while ($row = $result->fetch_assoc()) {
    # code...
    $users[] = $row;
  }
  echo json_encode($users);
}
