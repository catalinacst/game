@extends('layouts.template')

@section('navbar')
<nav class="teal lighten-2">
  <div class="nav-wrapper container">
    <a href="/introduction" class="brand-logo">Bartef</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="/show/1">Perfil</a></li>
      <li><a href="/home">Explorar</a></li>
      <li><a href="/logout">Salir</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="/show/1">Perfil</a></li>
      <li><a href="/home">Explorar</a></li>
      <li><a href="/logout">Salir</a></li>
    </ul>
  </div>
</nav>
@stop

@section('buttons')
<div class="fixed-action-btn vertical click-to-toggle">
  <a class="btn-floating btn-large teal lighten-2"><i class="large material-icons">dashboard</i></a>
  <ul>
    <li><a class="btn-floating btn-large yellow darken-1" href="/feedback"><i class="large material-icons">comment</i></a>Encuesta</li>
    <li><a class="btn-floating btn-large green" href="/reset"><i class="large material-icons">replay</i></a>Resetear</li>
    <li><a class="btn-floating btn-large modal-trigger blue" href="#path"><i class="large material-icons">visibility</i></a>Camino</li>
  </ul>
</div>
<!-- Modal Structure -->
<div id="path" class="modal bottom-sheet">
  <div class="modal-content  grey lighten-5">
    <center> <h3 class="Bold">Camino</h3> </center>
    <div class="container">
      <div class="row">
        <div class="col s6">

          <p class="center"><b>Intercambio #1</b></p>
          <div class="row">
            <div class="col s2 offset-s4 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/71.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/6.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #2</b></p>
          <div class="row">
            <div class="col s2 offset-s4 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/20.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/3.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #3</b></p>
          <div class="row">
            <div class="col s2 offset-s4 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/37.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/2.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #4</b></p>
          <div class="row">
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/38.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/19.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/12.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/4.jpg') !!}">
            </div>
          </div>
          <div class="row">
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/53.jpg') !!}">
            </div>
          </div>


          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #5</b></p>
          <div class="row">
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/31.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/5.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/44.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/5.jpg') !!}">
            </div>
          </div>
          <div class="row">
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/65.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/30.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/8.jpg') !!}">
            </div>
          </div>

        </div>

        <div class="col s6">

          <p class="center"><b>Intercambio #6</b></p>
          <div class="row">
            <div class="col s2 offset-s1 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/15.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/61.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/22.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/6.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #7</b></p>
          <div class="row">
            <div class="col s2 offset-s3 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/62.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/55.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/7.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #8</b></p>
          <div class="row">
            <div class="col s2 offset-s5 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/32.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/8.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br>

          <p class="center"><b>Intercambio #9</b></p>
          <div class="row">
            <div class="col s2 offset-s3 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/56.jpg') !!}">
            </div>
            <div class="col s2 objects">
              <img class="responsive-img materialboxed" src="{!! asset('img/objects/48.jpg') !!}">
            </div>
            <div class="col s2">
              <img class="responsive-img" src="{!! asset('img/flecha.png') !!}">
            </div>
            <div class="col s3 users">
              <img class="responsive-img" src="{!! asset('img/users/9.jpg') !!}">
            </div>
          </div>

          <hr class="style1"> <br> <br>

          <div class="row">
            <div class="col s9">
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-large blue">Entendido!</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
@stop

@section('footer')
<footer class="page-footer orange">
  <div class="footer-copyright">
    <div class="container">
    Made by BCC
    </div>
  </div>
</footer>
@stop
