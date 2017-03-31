@extends('layouts.master')

@section('title', 'Introducción')

@section('content')

<div class="section">
  <div class="container">
    <br>
    <h2 class="light header">Sobre nosotros.</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ornare justo.
      Nunc mattis justo sagittis massa bibendum, in accumsan lorem mattis. In hac habitasse
      platea dictumst. Donec lobortis dolor sed purus ornare, ut posuere massa convallis.
      Aliquam vel leo nec mi malesuada laoreet. In nec urna et nunc aliquet interdum. Aliquam sem nulla,
      fermentum non nibh vitae, volutpat sodales massa. Nunc non tellus tempor, interdum orci et, tristique
      felis.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra erat vitae dui feugiat,
      nec congue nisi venenatis. Mauris eleifend velit a tellus faucibus.
    </p>
  </div>
</div>
<br>
<div class="divider"></div>
<br>
<div class="section">
  <div class="container">
    <h4 class="light header">En este botón
      <a class="btn-floating btn-large teal lighten-2">
        <i class="large material-icons">dashboard</i>
      </a>
     podras ver lo siguiente:</h4>
  </div>
  <div class="row">
    <!-- Feedback -->
    <div class="col s4">
      <p class="flow-text center">Feedback
      <a class="btn-floating btn-large waves-effect waves-light yellow"><i class="large material-icons">comment</i></a></p>
        <blockquote>
          <b> Deseas contestar nuestra encuesta? </b>
          <br>
          Después de haber realizado los intercambios deseados y de sentir que cumpliste tu objetivo.
          <br>
          Nos puedes contestar una pequeña encuesta.
          <br>
          <br>
          <br>
          <b> Vamos por ello! </b>
        </blockquote>
    </div>
    <!-- Reset -->
    <div class="col s4">
      <p class="flow-text center">Resetear
      <a class="btn-floating btn-large waves-effect waves-light green"><i class="large material-icons">replay</i></a></p>
        <blockquote>
          <b> Deseas volver a empezar? </b>
          <br>
          Si en algún momento quieres volver a empezar, o realizaste un intercambio no deseado.
          <br>
          Te damos la posibilidad que puedas volver a empezar! Devolviendo los objetos a su dueño principal.
          <br>
          <br>
          <b> Vamos por ello! </b>
        </blockquote>
    </div>
    <!-- Path -->
    <div class="col s4">
      <p class="flow-text center">Camino
      <a class="btn-floating btn-large waves-effect waves-light blue"><i class="large material-icons">visibility</i></a></p>
        <blockquote>
          <b> Deseas conocer los intercambios correctos? </b>
          <br>
          Te ofrecemos la posibilidad de que conozcas un camino mostrandote los intercambios necesarios
          para que llegues al objeto sorpresa!
          <br>
          Ten en cuenta que solo es una posibilidad, puedes escoger cualquier otro camino.
          <br>
          <b> Vamos por ello! </b>
        </blockquote>
    </div>
  </div>
</div>

<div class="center">
  <a href="/welcome" class="waves-effect waves-light btn-large orange">Empezar</a>
</div>

<br>
<br>

@stop
