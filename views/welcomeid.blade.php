<!DOCTYPE html>
<html>
<head>
  <title>Personas </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
  <body>
    <ul>
      {{-- @foreach ($persona as $persona) --}}
        <li>{{ $persona->nombre }}</li>
      {{-- @endforeach --}}
    </ul>

    <div class="container">
      <h2>Personas</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Adrian</td>
            <td>Garcia</td>
            <td>18</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Fernanda</td>
            <td>Martinez</td>
            <td>18</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Miguel</td>
            <td>Miramontes</td>
            <td>24</td>
          </tr>
        </tbody>
      </table>
      <button type="button" class="btn btn-primary">Agregar</button>
      <button type="button" class="btn btn-primary">Editar</button>
    </div>
  </body>

  <style type="text/css">
    
    body {
      margin-top: 3%;
      margin-left: 3%;
    }

    label {
      margin-bottom: -2%;
    }

    .container {
      margin-left: -1.1%;
    }

    .table {
      margin-top: 1%;
    }

    .col-xs-3 {
      margin-left: 1%; 
      margin-bottom: -1%;
    }

    .btn-primary {
      margin-bottom: 1%;
    }

    .btn-success {
      margin-top: 2%;
    }
  </style>

</html>