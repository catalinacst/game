@extends('layouts.master')

@section('title', 'Barter')

@section('content')
<!-- Exchange zone -->
<div class = "section">
  <div class="row">
    <!--- User 1 -->
    <div class="col s12 l6 m12">
      <!-- Username -->
      <h4 class="center">Usuario 1</h4>

      <div class="#b0bec5 blue-grey lighten-3"  id = "inter01">
        <div class="row">
          <div class="col s2">
            <div class="objects01 sub-inter"></div>
          </div>

          <div class="col s2">
            <div class="objects01" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects01" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects01" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects01" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects01" id = "sub-inter">
            </div>
          </div>
        </div>
        <!-- Segunda Columna -->
        <div class="row">
          <div class="col s2">
            <div class="black" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black" id = "sub-inter">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- Usuario 2 -->
    <div class="col s12 l6 m12">
      <h4 class="center">Usuario 2</h4>
      <div class="#b0bec5 blue-grey lighten-3"  id = "inter01">
        <!-- Primera Columna objects02 -->
        <div class="row">
          <div class="col s2">
            <div class="objects02 materialboxed" data-caption="A picture" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects02 materialboxed" data-caption="A picture" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects02 materialboxed" data-caption="A picture" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects02 materialboxed" data-caption="A picture" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects02 materialboxed" data-caption="A picture" id = "sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="objects02 materialboxed" data-caption="A picture" id = "sub-inter">
            </div>
          </div>
        </div>

        <!-- Segunda Columna -->
        <div class="row">
          <div class="col s2">
            <div class="black materialboxed" data-caption="A picture" id="sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black materialboxed" data-caption="A picture" id="sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black materialboxed" data-caption="A picture" id="sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black materialboxed" data-caption="A picture" id="sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black materialboxed" data-caption="A picture" id="sub-inter">
            </div>
          </div>

          <div class="col s2">
            <div class="black materialboxed" data-caption="A picture" id="sub-inter">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- Botones Regresar, Proponer o Aceptar -->
  <div class = "col s12">
    <div class = "center">
      <a class="waves-effect waves-light btn black">Regresar</a>
      <a class="btn-floating btn-large waves-effect waves-light black"><i class="mdi-content-add"></i></a>
      <a class="waves-effect waves-light btn black">Proponer</a>
    </div>
  </div>
</div>

<!-- Visualización Objetos -->
<div class="section">
  <div class = "container">
    <div class="row">
      <!--- Lista Mis Cosas -->
      <br>
      <div class="row">
        <div class="col s8">
          <h3><center>Mis cosas</center></h3>
        </div>
        <div class="col s4">
          <h3><center>Sus cosas</center></h3>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <!-- Left -->
        <!-- Imagen -->
        <div class="row">
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Impermeable para moto" name="Impermeable para moto" value="10" />
              <label for="Impermeable para moto">Impermeable para moto, 10</label>
            </p>
            <br>
          </div>

          <!-- Imagen -->
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/4.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Nintendo64" name="Nintendo64" value="300" />
              <label for="Nintendo64">Nintendo64, 300</label>
            </p>
            <br>
          </div>

          <!-- Imagen -->
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/27.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Se&ntilde;or de los anillos" name="Se&ntilde;or de los anillos" value="100" />
              <label for="Se&ntilde;or de los anillos">Se&ntilde;or de los anillos, 100</label>
            </p>
            <br>
          </div>

          <!-- Imagen -->
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/venta.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Sensor de reversa" name="Sensor de reversa" value="220" />
              <label for="Sensor de reversa">Sensor de reversa, 220</label>
            </p>
            <br>
          </div>

        </div>



        <!-- Right -->
      </div>
      <div class="col s12 m6 l4">
        <!-- Left -->
        <!-- Imagen -->
        <div class="row">
          <div class="col s0">
            {!! Html::image('img/librosize.jpg', 'img', array('class' => 'responsive-img materialboxed', 'id' => 'box')) !!}
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Impermeable para moto" name="Impermeable para moto" value="10" />
              <label for="Impermeable para moto">Impermeable para moto, 10</label>
            </p>
            <br>
          </div>

          <!-- Imagen -->
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/4.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Nintendo64" name="Nintendo64" value="300" />
              <label for="Nintendo64">Nintendo64, 300</label>
            </p>
            <br>
          </div>

          <!-- Imagen -->
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/27.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Se&ntilde;or de los anillos" name="Se&ntilde;or de los anillos" value="100" />
              <label for="Se&ntilde;or de los anillos">Se&ntilde;or de los anillos, 100</label>
            </p>
            <br>
          </div>

          <!-- Imagen -->
          <div class="col s0">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/venta.jpg" id = "box">
          </div>
          <!-- Check -->
          <div class="col s9 offset-s0">
            <p>
              <input type="checkbox" class="left" id="Sensor de reversa" name="Sensor de reversa" value="220" />
              <label for="Sensor de reversa">Sensor de reversa, 220</label>
            </p>
            <br>
          </div>
        </div>
        <!-- Right -->
      </div>
      <!--- Lista Cosas Otra Persona -->
      <div class="col s4" >
        <!-- Primera Fila -->
        <div class="row">
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
        </div>
        <!-- Segunda Fila -->
        <div class="row">
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
        </div>
        <!-- Tercera Fila -->
        <div class="row">
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
          <div class="col s3">
            <img class="responsive-img materialboxed" data-caption="A picture" src="img/librosize.jpg" id = "box">
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>
@stop
