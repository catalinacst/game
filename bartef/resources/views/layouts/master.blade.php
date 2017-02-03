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
        <a href="/welcome" class="brand-logo">Bartef</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/home">Inicio</a></li>
          <li><a href="#">Notificaciones</a></li>
          <li><a href="#">Sobre Nosotros</a></li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer class="page-footer orange">
      <!--
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      -->
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
      </div>
    </footer>


    <!-- Compiled and minified jQuery -->
    {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
    <!-- Compiled and minified JavaScript -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js') !!}
    <!-- Scripts -->
    @yield('script')
  </body>
</html>
