@extends('layouts.master')

@section('title', 'Perfil')

@section('content')

<div class = "section">
  <div class="row container">
    <br><br>

    <!-- Show user name and image -->
    <div class="col s12 m4 l3">
      <div>
        <h3 class="center">Perfil</h4>
      </div>
      <!-- img -->
      <div>
        <br>
        {!! Html::image('img/usuario.png', 'userimg', array('class' => 'responsive-img')) !!}
      </div>
      <!-- name -->
      <div>
        <br>
        <h5 class="center light">{{ $user->name }}</h5>
      </div>
      <!-- interests -->
      <div>
        <br>
        @foreach($interests as $interest)
        <div class="chip">
          {{ $interest }}
        </div>
        @endforeach
      </div>
      <!-- Button -->
      <div class="center">
        <br>
        <a class="waves-effect waves-light btn orange btn-large" href="#"><i class="material-icons left">done</i>Intercambio</a>
      </div>
      <!-- Button -->
      <div class="center">
        <br>
        <a class="waves-effect waves-light btn" href="/home">Regresar</a>
      </div>

    </div>

    <!-- Objetos -->
    <div class="col s12 m8 l9">
      <div class = "col s12 offset-s1">
        <div class="row">

          <!-- Show the Objects -->
          <div id="objects" class="col s12">
            <br>
            <div class="row">
              @foreach($user->objects as $object)
              <div class = "col s4">
                <div class="card medium">
                  <div class="card-image waves-effect waves-block waves-light">
                    {!! Html::image('img/object.jpg', 'objectimg', array('class' => 'responsive-img')) !!}
                  </div>
                  <div class="card-content">
                    <h5>{{ $object->name }}</h5>
                    <p class="light">{{ $object->category->name }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>

    <br><br>
  </div>
</div>

@stop
