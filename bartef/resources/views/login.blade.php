<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - Bartef</title>

    <!-- Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css') !!}
  </head>
  <body>
    <div class="section">
      <div class="container">
        <br><br>

        <!-- Header -->
        <h1 class="header center orange-text">Bartef!</h1>

        <!-- Introduction text -->
        <h5 class="header center light">Ingresa tu contraseña de invitado</h5>

        <!-- Form Sign In -->
        {!! Form::open(['action' => 'AuthController@check', 'method' => 'POST']) !!}

          <div class="row">
            <div class="input-field col offset-s4 s4">
              {!! Form::password('password', ['class' => 'validate']) !!}
              {!! Form::label('password', 'Contraseña') !!}
            </div>
          </div>

          <!-- {!! Form::submit('Enviar', ['class' => 'btn waves-effect waves-light']) !!} -->

        {!! Form::close() !!}
      </div>
    </div>

    <!-- Compiled and minified jQuery -->
    {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
    <!-- Compiled and minified JavaScript -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js') !!}
  </body>
</html>
