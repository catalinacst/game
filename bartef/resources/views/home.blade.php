@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class = "section">
  <div class="row container">
    <br><br>

    <!-- Show user name and image  -->
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

    <!-- Panel: Objetos - Explorar - Feedback -->
    <div class="col s12 m8 l9">
      <div class = "col s12 offset-s1">
        <div class="row">

          <!-- Tabs -->
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s4"><a href="#objects">Objetos</a></li>
              <li class="tab col s4"><a href="#explore" class="active">Explorar</a></li>
              <li class="tab col s4"><a href="#feedback">Feedback</a></li>
            </ul>
          </div>

          <!-- Show the Objects 38*180 -->
          <div id="objects" class="col s12">
            <br>
            <div class="row">
              @foreach($users[0]->objects as $object)
              <div class = "col s4">
                <div class="card small vertical">
                  <div class="card-image waves-effect waves-block waves-light">
                    {!! Html::image('img/objects/'.$object->id.'.jpg', 'objectimg', array('class' => 'imgbarter' )) !!}
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

          <!-- Explore friends -->
          <div id="explore" class="col s12">
            <br>
            <div class = "row">
              @for($i = 1, $size = count($users); $i < $size; $i++)
              <div class = "col s4">
                <div class="card medium">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="show/{{$users[$i]->id}}">
                      {!! Html::image('img/users/'.$users[$i]->id.'.jpg', 'userimg', array('class' => 'responsive-img')) !!}
                    </a>
                  </div>
                  <div class="card-content">
                    <h5>{{ $users[$i]->name }}</h5>
                  </div>
                </div>
              </div>
              @endfor
            </div>
          </div>

          <!-- Form feedback -->
          <div id="feedback" class="col s12">
            <h2 class="center"> Formulario </h2>
              <p>Si ya has realizado los intercambios necesarios, ayudanos respondiendo las siguientes preguntas.</p>
            <div class="row">
              <form class="col s12">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdqbz1W5DO-o-Mr1POp7-Gn1QH8BcnWJ1llpnwugxdRJ4Kimg/viewform?embedded=true"
                width="600" height="1300" frameborder="0" marginheight="20" marginwidth="0">Cargando...</iframe>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- / Panel: Objetos - Explorar - Feedback -->

    <br><br>
  </div>
</div>

@stop
