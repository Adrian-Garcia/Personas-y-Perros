<!DOCTYPE html>
<html>
<head>
  <title>Personas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
  <body>
    
    <h2>Personas</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Edad</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($personas as $persona)
          <tr>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->edad}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <button type="button" class="btn btn-primary" action="/">Editar</button>
    
    <div class="container">
      {{-- POST evia datos --}}
      <h2>Agregar Persona</h2>
      <form method="POST" action="/agregar">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input name="nombre" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input name="apellido" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input name="edad" type="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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
      margin-bottom: 5%;
    }

    .btn-success {
      margin-top: 2%;
    }
  </style>

</html>