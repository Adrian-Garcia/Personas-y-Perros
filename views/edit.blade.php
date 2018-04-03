<!DOCTYPE html>
<html>
<head>
  <title>Personas </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{csrf_token()}}">
</head>
  <body>
    <div class="container">
      <h2>Personas</h2>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($personas as $persona)
            <tr>
              <td>{{$persona->id}}</td>
              <td><input id="persona_nombre_{{$persona->id}}" value="{{$persona->nombre}}" class="form-control"> </td>
              <td><input id="persona_apellido_{{$persona->id}}"  value="{{$persona->apellido}}" class="form-control"> </td>
              <td><input id="persona_edad_{{$persona->id}}"  type="number" value="{{$persona->edad}}" class="form-control"> </td>
              <td>
                <button data-id="{{$persona->id}}" type="button" class="btn btn-primary edit-pregunta">Editar</button>
                <button data-id="{{$persona->id}}" type="button" class="btn btn-danger borrar-pregunta">Borrar</button>
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
          'id'        : id,
          'nombre'    : $('#persona_nombre_' + id).val(),
          'apellido'  : $('#persona_apellido_' + id).val(),
          'edad'      : $('#persona_edad_' + id).val()
        }

        console.log(jsonToSend);

        $.ajax({
           type: 'POST',
           url: '/update',
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
        url: '/delete',
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