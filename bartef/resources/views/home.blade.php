@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class = "section">
  <div class="row container">
    <br><br>

    <!-- Show user name and image  -->
    <div class="col s8 m4 l3">
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
        <h5 class="center light">{{ $users[0]->name }}</h5>
      </div>
      <!-- interests -->
      <div>
        <br>
        @foreach($users[0]->interests as $interest)
        <div class="chip">
          {{ $interest->name }}
        </div>
        @endforeach
      </div>
    </div>
    <br>
    <!-- Explorar -->
    <div class="col s12 m8 offset-l1 l8">
      <div class = "row">
        @for($i = 1, $size = count($users); $i < $size; $i++)
        <div class = "col l4 m6 s6">
          <div class="card medium">
            <div class="card-image waves-effect waves-block waves-light" style="height: 60%;">
              <a href="show/{{$users[$i]->id}}">
                {!! Html::image('img/users/'.$users[$i]->id.'.jpg', 'userimg', array('class' => 'responsive-img', 'style' => 'height: 100%;')) !!}
              </a>
            </div>
            <div class="card-content">
              <h6>{{ $users[$i]->name }}</h6>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
    <!-- /Explorar -->
    <br><br>
  </div>
</div>

@stop
