@extends('layouts.master')

@section('title', 'Home')

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
        <h5 class="center light">{{ $users[0]->name }}</h5>
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
    </div>

    <!-- Panel: Objetos - Explorar - Feedback -->
    <div class="col s12 m8 l9">
      <div class = "col s12 offset-s1">
        <div class="row">

          <!-- Tabs -->
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s4"><a href="#objects" class="active">Objetos</a></li>
              <li class="tab col s4"><a href="#explore">Explorar</a></li>
              <li class="tab col s4"><a href="#feedback">Feedback</a></li>
            </ul>
          </div>

          <!-- Show the Objects -->
          <div id="objects" class="col s12">
            <br>
            <div class="row">
              @foreach($users[0]->objects as $object)
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

          <!-- Explore friends -->
          <div id="explore" class="col s12">
            <br>
            <div class = "row">
              @for($i = 1, $size = count($users); $i < $size; $i++)
              <div class = "col s4">
                <div class="card medium">
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="show/{{$users[$i]->id}}"><img class="activator" src="img/friendm.png"></a>
                  </div>
                  <div class="card-content">
                    <h5>{{ $users[$i]->name }}</h6>
                  </div>
                </div>
              </div>
              @endfor
            </div>
          </div>

          <!-- Form feedback -->
          <div id="feedback" class="col s12">
            <h2 class="center"> Contactanos </h2>

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

                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                  </div>
                </div>

                <div class = "right">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Send
                    <i class="material-icons right">send</i>
                  </button>
                </div>

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
