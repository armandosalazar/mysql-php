<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="form.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
</head>

<body>
  <section class="search">
    <input type="text" id="search">
    <button>Agregar</button>
  </section>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody id="tbody">
    </tbody>
  </table>
</body>

<script>
  // fetch('json.php')
  //   .then(response => response.json())
  //   .then(data => console.log(data));

  // const data = new FormData();
  // data.append('name', 'John');
  // data.append('age', 30);
  // data.append('cars', new Array("Ford", "BMW", "Fiat"));

  // fetch('post.php?id=17', {
  //     method: 'POST',
  //     body: data
  //   })
  //   .then(response => response.json())
  //   .then(data => console.log(data));

  // document.getElementById('search').addEventListener('keyup', (event) => {
  //   if (event.key === 'Enter') {
  //     console.log(event.target.value);
  //   }
  // });

  document.getElementById('search').addEventListener('keyup', (event) => {
    fetch('users.php?search=' + event.target.value)
      .then(response => response.json())
      .then(data => {
        let html = '';
        data.forEach(user => {
          html += `
            <tr>
              <td>${user.id}</td>
              <td>${user.first_name}</td>
              <td>${user.last_name}</td>
              <td>${user.email}</td>
              <td class="actions">
                <button>Editar</button>
                <button class="delete">Eliminar</button>
              </td>
            </tr>
          `;
        });
        document.getElementById('tbody').innerHTML = html;
      });
  });
</script>

</html>