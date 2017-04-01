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
    @yield('navbar')

    <!-- Botones -->
    @yield('buttons')

    @yield('content')

    @yield('footer')

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
