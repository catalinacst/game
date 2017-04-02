@extends('layouts.template')

@section('title', 'Introducción')

@section('content')

<style>
  .psize  {
      font-size: 17px;
  }
</style>

<div class="section">
  <div class="">
    <h2 class="light header center">Instrucciones</h2>
    <div>
      <div class="row">
        <div class="col s12 l6">
          <h5>¿Como jugar?  <i class="material-icons small">info_outline</i> </h5>
          <blockquote>
            <p class = "psize flow-text">El juego consiste en interactuar con otros usuarios por medio de
            <b> intercambios de objetos. </b> Inicialmente cada usuario tendrá un conjunto
            de objetos y toda la disposición para realizar intercambios justos, es decir,
            poder ofrecer y recibir objetos que estén de acuerdo a sus intereses.
            Inicialmente usted podrá escoger su nombre de usuario y sus intereses.
            </p>
          </blockquote>
        </div>
        <div class="col s12 l6">
          <h5>Objetivo  <i class="material-icons small">search</i> </h5>
          <blockquote>
            <p class = "psize flow-text">Como cualquir persona, siempre se busca ganar algo al realizar un
            negocio, el objetivo del juego es maximizar el valor de sus pertenencias,
            negociando con los otros usuarios, es decir, realizando buenos
            intercambios.<br>
            <b>Es garantizado que existe una manera de conseguir un automóvil con sus
            objetos iniciales, este es el logro final.</b>
            </p>
          </blockquote>
        </div>
      </div>
      <div class="row">
        <div class="col l7 offset-l3 s12">
          <h5>Recomendaciones  <i class="material-icons small">description</i> </h5>
          <blockquote>
              <ol>
                <li>
                  <p class = "psize flow-text">
                    Trate de estar atento a los intereses de los demás, puede que un objeto no sea de gran valor
                    para usted, pero si para otra persona.
                  </p>
                </li>
                <li>
                  <p class = "psize flow-text"> Tenga en cuenta que algunas personas se interesan más por unos
                  objetos que por otros, use esta particular propiedad para cumplir
                  su objetivo.
                  </p>
                </li>
                <li>
                  <p class = "psize flow-text">No siempre es mejor ofrecer muchos objetos de gran valor,
                  a ofrecer un simple objeto a la persona indicada.
                  </p>
                </li>
                <li>
                  <p class = "psize flow-text">Conseguir un objeto de su interes le puede llevar más de un
                  intercambio.
                  </p>
                </li>
              </ol>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="divider"></div>
<br>
<div class="section">
  <div class="row">
    <div class="col s12 l12">
      <h5 class="light header">En este botón
        <a class="btn-floating btn-large teal lighten-2">
          <i class="medium material-icons">dashboard</i>
        </a>
       podras ver lo siguiente:</h5>
    </div>
  </div>

  <div class="row">
    <!-- Feedback -->
    <div class="col s12 l4">
      <p class="flow-text">Feedback
      <a class="btn-floating btn-large waves-effect waves-light yellow"><i class="large material-icons">comment</i></a></p>
        <blockquote>
          <p class = "psize flow-text">
            <b> ¿Deseas contestar nuestra encuesta? </b>
            <br>
            <br>
            Tu opinion es muy importante para nosotros! por eso te invitamos
            a realizar nuestra encuesta cuando sientas que ya cumpliste tu
            objetivo.
            <br>
            <br>
            <b> Vamos por ello! </b>
          </p>
        </blockquote>
    </div>
    <!-- Reset -->
    <div class="col s12 l4">
      <p class="flow-text">Resetear
      <a class="btn-floating btn-large waves-effect waves-light green"><i class="large material-icons">replay</i></a></p>
        <blockquote>
          <p class = "psize flow-text">
            <b> ¿Deseas volver a empezar? </b>
            <br>
            <br>
            Si en algún momento quieres volver a empezar, o realizaste un intercambio no deseado.
            <br>
            Te damos la posibilidad que puedas volver a empezar! Devolviendo los objetos a su dueño inicial.
            <br>
            <br>
            <b> Vamos por ello! </b>
          </p>
        </blockquote>
    </div>
    <!-- Path -->
    <div class="col s12 l4">
      <p class="flow-text">Camino
      <a class="btn-floating btn-large waves-effect waves-light blue"><i class="large material-icons">visibility</i></a></p>
        <blockquote>
          <p class = "psize flow-text">
            <b> ¿Deseas conocer los intercambios correctos? </b>
            <br>
            <br>
            Te ofrecemos la posibilidad de que conozcas un camino mostrandote los intercambios necesarios
            para que llegues al objeto sorpresa!
            <br>
            Ten en cuenta que solo es una posibilidad, puedes escoger cualquier otro camino.
            <br>
            <br>
            <b> Vamos por ello! </b>
          </p>
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
