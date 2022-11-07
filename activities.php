<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <?php 
require 'Header.php';
?>
</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Pending</a>
  </li>
  <li class="position-absolute end-0 mx-3">
  <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-success" type="button">Button</button>
  <button class="btn btn-success" type="button">Button</button>
</div>
  </li>
</div>
</ul>

<table class="table table-success table-striped">
  <thead class="table-group-divider">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>