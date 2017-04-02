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
        {!! Html::image('img/users/'.$user->id.'.jpg', 'userimg', array('class' => 'responsive-img')) !!}
      </div>
      <!-- name -->
      <div>
        <br>
        <h5 class="center light">{{ $user->name }}</h5>
      </div>
      <!-- interests -->
      <div>
        <br>
        @foreach($user->interests as $interest)
        <div class="chip">
          {{ $interest->name }}
        </div>
        @endforeach
      </div>
      <!-- Button -->
      @if( $user->id != 1 )
      <div class="center">
        <br>
        <a class="waves-effect waves-light btn orange btn-large" href="/barter/{{$user->id}}">Intercambiar</a>
      </div>
      @endif
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

          @if(Session::has('message'))
          <div class="card-panel light-green lighten-4">
            <p class="green-text">
              <i class="material-icons left">done</i>
              <strong>{{ Session::get('message') }}</strong>
            </p>
          </div>
          @endif

          <!-- Show the Objects -->
          <div id="objects" class="col s12">
            <br>
            <div class="row">
              @foreach($user->objects as $object)
              <div class = "col s4">
                <div class="card small">
                  <div class="card-image waves-effect waves-block waves-light imgbarter">
                    {!! Html::image('img/objects/'.$object->id.'.jpg', 'objectimg', array('class' => 'imgbarter')) !!}
                  </div>
                  <div class="card-content" style="padding: 10px;">
                    <h6>{{ $object->name }} </h6>
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
