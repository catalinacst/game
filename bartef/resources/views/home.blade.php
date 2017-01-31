@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class = "#9e9e9e grey" id = "perfil">
  <div class="row continer">

    <div class="col s12 m4 l2">
      <div class="col s10">
        <br>
        <h4 class="center">Profile</h4>
      </div>
      <div class = "col s12">
        <br>
        <img src="img/usuario.png">
      </div>
      <div class="col s10">
        <h5 class="center">About me</h5>
        <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
    </div>
    <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
      <br>
      <br>
      <div class = "col s12 offset-s1">
        <div class="row">
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s3"><a class="active" href="#test1">Mis Cosas</a></li>
              <li class="tab col s4"><a href="#test2">Bartef's</a></li>
              <li class="tab col s5"><a href="#test3">Feedback</a></li>
            </ul>
          </div>
          <!-- Llamado  del primer enlace -->
          <div id="test1" class="col s12">
            <br>
            <div class="row">

              <div class = "col s3 offset-s0">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/libro.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Articulo 1<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más imagenes</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Articulo 1<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
                </div>
              </div>

              <div class = "col s3">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/libro.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Articulo 2<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más imagenes</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Articulo 2<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
                </div>
              </div>

              <div class = "col s3">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/libro.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Articulo 3<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más imagenes</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Articulo 3<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
                </div>
              </div>

              <div class = "col s3">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/libro.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Articulo 4<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más imagenes</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Articulo 4<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
                </div>
              </div>

              <div class = "col s3 offset-s0">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/libro.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Articulo 5<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más imagenes</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Articulo 5<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- El segundo llamado, a los Barter's <div class = "col s10 offset-s0">-->
          <div id="test2" class="col s12">
            <br>
            <div class = "row">
              <div class = "col s3 offset-s0">
                 <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendh.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>

              <div class = "col s3 offset-s0">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendm.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>

              <div class = "col s3 offset-s0">
                 <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendh.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>

              <div class = "col s3 offset-s0">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendm.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>

              <div class = "col s3 offset-s0">
                 <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendh.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>

              <div class = "col s3 offset-s0">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendm.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>

            </div>

          <div id="test3" class="col s12">
            <h1 class = "center">Encuesta</h1>
              <div class = "col s3 offset-s0">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="#"><img class="activator" src="img/friendm.png"></a>
                  </div>
                     <h6 class="namepad">User</h6>
                </div>
              </div>
          </div>

        </div>
      </div>

      <div class = "col s10"></div>
      <!-- Teal page content
            <img src="img/fondovinotinto.jpg">
            This content will be:
        9-columns-wide on large screens,
        8-columns-wide on medium screens,
        12-columns-wide on small screens  -->
      <div class = "col s12"></div>
    </div>
  </div>
</div>


<!-- Comentarios -->
<div class = "white">
  <div class = "row container" id = "contactenos">
    <h2 class = "center"> Contactanos </h2>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
          </div>
        </form>
      </div>
      <div>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Comentarios</label>
              </div>
            </div>
          </form>
      </div>
  </div>
</div>

<div class = "right">
  <button class="btn waves-effect waves-light" type="submit" name="action">Send
    <i class="material-icons right">send</i>
  </button>
</div>

<br><br>
@stop
