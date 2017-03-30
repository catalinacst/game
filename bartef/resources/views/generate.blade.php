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

        <!-- Introduction text -->
        <h5 class="header center light">Ingresa tu contraseña de desarrollador</h5>

        <input id="flag" type="hidden" value='{{$state->flag}}'>

        <div class="center row">
          <div class="input-field col offset-s2 s6">
            <input id="password" type="password" class="validate" required>
            <label for="password">Contraseña</label>
          </div>
          <div class="col s2">
            <a class="btn-floating btn-large waves-effect waves-light red" onclick="query()">
              <i class="material-icons">send</i>
            </a>
          </div>
        </div>

        <br><br>

        <!-- Button refresh -->
        <div id="refresh" class="center" style="display: none;">
          <h5 class="header light">La aplicación esta activada.</h5>
          <a href="/refresh" class="waves-effect waves-light btn">Desactivar<a>
        </div>

        <!-- Form Generate -->
        <div id="generate" class="center row" style="display: none;">
          {!! Form::open(['action' => 'AuthController@store', 'method' => 'POST']) !!}
            <div class="input-field col offset-s2 s6">
              {!! Form::text('newpass', '', ['id' => 'newpass', 'class' => 'validate']) !!}
              {!! Form::label('newpass', 'Nueva contraseña') !!}
            </div>
            <br><br>
            <!-- Random -->
            <a class="waves-effect waves-light btn teal lighten-2" onclick="random()">
              Random
            </a>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

    <!-- Compiled and minified jQuery -->
    {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
    <!-- Compiled and minified JavaScript -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js') !!}
    <!-- Script -->
    {!! Html::script('js/generate.js') !!}
  </body>
</html>
