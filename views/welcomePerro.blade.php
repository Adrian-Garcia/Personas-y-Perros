<!DOCTYPE html>
<html>
<head>
  <title>Perros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
  <body>
    
    <h2>Perros</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Hora de Salida</th>
          <th>Hora de Regreso</th>
          <th>Hora de Final de Descanso</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($perros as $perro)
          <tr>
            <td>{{$perro->nombre}}</td>
            <td>{{$perro->horaSalida}}</td>
            <td>{{$perro->horaRegreso}}</td>
            <td>{{$perro->horaFinalDescanso}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <button type="button" class="btn btn-primary" action="/">Editar</button>

		<div class="container">	
      {{-- POST evia datos --}}
      <h2>Agregar Perro</h2>
      {{-- Cambiar action a /agregarPerro --}}
      <form method="POST" action="/agregarPerro">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nombrePerro">Nombre</label>
          <input name="nombrePerro" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="horaSalida">Hora de Salida</label>
          <input name="horaSalida" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="horaRegreso">Hora de Regreso</label>
          <input name="horaRegreso" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="horaFinalDescanso">Hora del final del descanso</label>
          <input name="horaFinalDescanso" type="text" class="form-control">
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