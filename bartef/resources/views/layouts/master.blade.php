<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') - Bartef</title>

    <!-- Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css') !!}
    <!-- Styles Css -->
    {!! Html::style('css/style.css') !!}
  </head>
  <body>

    <!-- Navbar -->
    <nav class="teal lighten-2">
      <div class="nav-wrapper container">
      <a href="/welcome" class="brand-logo">Bartef</  a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li> <b> <a href="/show/1">Perfil</a> </b> </li>
          <li> <b> <a href="/home">Explorar</a> </b> </li>
          <li> <b> <a href="/logout">Salir</a> </b> </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="/show/1">Perfil</a></li>
          <li><a href="/home">Explorar</a></li>
          <li><a href="/logout">Salir</a></li>
        </ul>
      </div>
    </nav>

    <!-- Botones -->
    <div class="row">
      <div class="col s6">
        <div class="fixed-action-btn vertical click-to-toggle">
          <a class="btn-floating btn-large teal lighten-2">
            <i class="large material-icons">dashboard</i>
          </a>
          <ul>
            <li><a class="btn-floating btn-large yellow darken-1"><i class="large material-icons">comment</i></a> Formulario</li>
            <li><a class="btn-floating btn-large green" href="/reset"><i class="large material-icons">replay</i></a> Resetear</li>
            <!-- Modal Trigger -->
            <li><a class="btn-floating btn-large modal-trigger blue" href="#modal1"><i class="large material-icons">visibility</i></a> Camino</li>
          </ul>
        </div>
      </div>
    </div>


    @yield('content')

    <footer class="page-footer orange">
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">BCC</a>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Compiled and minified jQuery -->
    {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
    <!-- Compiled and minified JavaScript -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js') !!}
    <!-- Navbar responsive -->
    {!! Html::script('js/modal.js') !!}

    @yield('script')
  </body>
</html>
