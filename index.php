<?php
$active = false;
var_dump($_GET);

// function changeState()
// {
//   global $active;
//   $active = !$active;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>

<body>
  <?php var_dump($active) ?>
  <button onclick="click();">Change state</button>
  <script>
    function click() {
      console.log('Works!');
      fetch('index.php?state=false', {
          method: 'GET',
          // body: new FormData()
        })
        .then(response => response.json())
        .then(data => console.log(data));
    }
  </script>
</body>

</html>