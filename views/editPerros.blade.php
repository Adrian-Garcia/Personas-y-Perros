<!DOCTYPE html>
<html>
<head>
  <title>Editar Perros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{csrf_token()}}">
</head>
  <body>
    <div class="container">
      <h2>Perros</h2>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Hora de Salida</th>
            <th>Hora de Regreso</th>
            <th>Hora de final de descanso</th>
          </tr>
        </thead>
        <tbody>
          @foreach($perros as $perro)
            <tr>
              <td>{{$perro->id}}</td>
              <td><input id="perro_nombre_{{$perro->id}}" value="{{$perro->nombre}}" class="form-control"> </td>
              <td><input id="perro_horaSalida_{{$perro->id}}"  value="{{$perro->horaSalida}}" class="form-control"> </td>
              <td><input id="perro_horaRegreso_{{$perro->id}}"  value="{{$perro->horaRegreso}}" class="form-control"> </td>
              <td><input id="perro_horaFinalDescanso_{{$perro->id}}"  value="{{$perro->horaFinalDescanso}}" class="form-control"> </td>             
              <td>
                <button data-id="{{$perro->id}}" type="button" class="btn btn-primary edit-pregunta">Editar</button>
                <button data-id="{{$perro->id}}" type="button" class="btn btn-danger borrar-pregunta">Borrar</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
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

    .btn-danger {
      margin-left: 22%;
    } 
  </style>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script >

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Editar Pregunta
    $("body").on('click', '.edit-pregunta', function(){
        var id = $(this).data('id');

        var jsonToSend = {
          'id'                : id,
          'nombrePerro'       : $('#perro_nombre_' + id).val(),
          'horaSalida'        : $('#perro_horaSalida_' + id).val(),
          'horaRegreso'       : $('#perro_horaRegreso_' + id).val(),
          'horaFinalDescanso' : $('#perro_horaFinalDescanso_' + id).val()
        }

        console.log(jsonToSend);

        $.ajax({
           type: 'POST',
           url: '/updatePerro',
           data: jsonToSend,
           dataType: 'json',

           success: function(data) {
            alert('exito');
            console.log(data);
           },
           
           error: function(errorMsg) {
              console.log(errorMsg.statusText);
              alert('error');
           }
        });
    });

     $("body").on('click', '.borrar-pregunta', function() {
      var id = $(this).data('id');

      var jsonToSend = {
        'id'        : id
      }

      console.log(jsonToSend);

      var button = $(this);


      $.ajax ({
        type: 'POST',
        url: '/deletePerro',
        data: jsonToSend,
        dataType: 'json',

        success: function(data) {
          alert('exito');
          console.log(data);

          var row = button.closest('tr');
          row.remove();
        },
           
        error: function(errorMsg) {
          console.log(errorMsg.statusText);
          alert('error');
        }
      });


    }); 

  </script>


</html>