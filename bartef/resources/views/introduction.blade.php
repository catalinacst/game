@extends('layouts.template')

@section('title', 'Introducción')

@section('content')
<div class="section">
  <div class="container">
    <br>
    <h2 class="light header">Instrucciones.</h2>
    <div>
      <h5>Como jugar</h5>
      El juego consiste en interactuar con otros usuarios por medio de
      intercambios de objetos. Inicialmente cada usuario tendra un conjunto
      de objetos con los que esta dispuesto a realizar cambios justos, es decir,
      que los objetos que le ofrece una persona a la otra son de su interes y
      son de valores muy similares.
      Inicialmente usted podra escoger su nombre de usuario y la categoria de
      los objetos de sus intereses.
      <h5>Objetivo</h5>
      Como cualquir persona, siempre se busca ganar algo al realizar un
      negocio, el objetivo del juego es maximizar el valor de sus pertenencias,
      negociando con los otros usuarios, es decir, realizando buenos
      intercambios.<br>
      <b>Es garantizado que existe una manera de conseguir un automovil con sus
      objetos iniciales, este es el logro final.</b>
      <h5>Recomendaciones</h5>
      <ol>
        <li>Tenga en cuenta que algunas personas se interesan mas por unos
        objetos que por otros, use esta particular propiedad para conseguir
        su objetivo.</li>
        <li>No siempre es mejor ofrecer muchos objetos de gran valor,
        a ofrecer un simple objeto a la pesona indicada.</li>
        <li>Conseguir un objeto de su interes le puede llevar mas de un
        intercambio.</li>
      </ol>
    </div>
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
          <b> ¿Deseas contestar nuestra encuesta? </b>
          <br>
          <br>
          Tu opinion es muy importante para nosotros! por eso te invitamos
          a realizar nuestra encuesta cuando sientas que ya cumpliste tu
          objetivo.
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
          <b> ¿Deseas volver a empezar? </b>
          <br>
          Si en algún momento quieres volver a empezar, o realizaste un intercambio no deseado.
          <br>
          Te damos la posibilidad que puedas volver a empezar! Devolviendo los objetos a su dueño inicial.
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
          <b> ¿Deseas conocer los intercambios correctos? </b>
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
