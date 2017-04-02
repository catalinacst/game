@extends('layouts.master')

@section('title', 'Barter')

@section('content')
<!-- Exchange zone -->
<div class = "section">
  <!-- User id -->
  <input type="hidden" id="route" value="{{ route('interests', $to->id) }}">
  <input type="hidden" id="asset" value="{{ asset('') }}">
  <!-- Usernames and objects proposed -->
  <div class="row">
    <!--- User 1 -->
    <div class="col s12 l6 m12">
      <!-- Username -->
      <h4 class="center">{{ $from->name }}</h4>
      <!-- Objects proposed -->
      <div class="grey lighten-2 inter">
        <div class="row" id="myBoxes">
          <!-- Boxes -->

          <!-- Modal Trigger - Boton más -->
          <div class="col s1">
            <a class="waves-effect btn-floating btn-large waves-light" href="#modal1">
              <i class="material-icons">add</i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--- User 2 -->
    <div class="col s12 l6 m12">
      <!-- Username -->
      <h4 class="center">{{ $to->name }}</h4>
      <!-- Objects proposed -->
      <div class="grey lighten-2 inter">
        <div class="row" id="theirBoxes">
          <!-- Boxes -->
        </div>
      </div>
    </div>
  </div>
  <!-- Buttons Regresar and Aceptar -->
  <div class = "center">
      <!-- Accept -->
      <button class="btn btn-large waves-effect waves-light orange" type="submit" form="form-exchange">
        Aceptar
      </button>
      <br><br>
      <!-- Back to Home -->
      <a class="waves-effect waves-light btn teal lighten-2" href="/home">
        Regresar
      </a>
  </div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet modal-fixed-footer">
  <!-- Modal body -->
  <div class="modal-content">
    <form action="/exchange/{{$to->id}}" id="form-exchange">
      <div class="row">
        <!-- My section -->
        <div class="col l6 s12">
          <!-- My Interests -->
          <div class="center">
            <h5>Intereses</h5>
            <div>
              @if (count($from->interests) == 0)
              <div class="chip">
                No tienes intereses
              </div>
              @else
              @foreach($from->interests as $interest)
              <div class="chip">
                {{ $interest->name }}
              </div>
              @endforeach
              @endif
            </div>
          </div>
          <!-- My things -->
          <ul class="collection with-header">
            <!-- Header Collection -->
            <li class="collection-header"><h4>Mis cosas</h4></li>
            <!-- Body Collection -->
            @foreach($from->objects as $object)
            <li class="collection-item avatar">
              {!! Html::image('img/objects/'.$object->id.'.jpg', 'img', array('class' => 'circle materialboxed')) !!}
              <p> <b> {{$object->name}} </b> </p>
              <p>Categoria: {{$object->category->name}} <br>
                 Valor aprox: ${{$object->value}}
              </p>
              <p class="secondary-content">
                <input type="checkbox" class="left" id="left{{$itl}}" name="left{{$itl}}" value="{{$object->id}}" />
                <label for="left{{$itl++}}"></label>
              </p>
            </li>
            @endforeach
          </ul>
        </div>
        <!-- Their section -->
        <div class="col l6 s12">
          <!-- Their Interests -->
          <div class="center">
            <h5>Intereses</h5>
            <div>
              @foreach($to->interests as $interest)
              <div class="chip">
                {{ $interest->name }}
              </div>
              @endforeach
            </div>
          </div>
          <!-- Their things -->
          <ul class="collection with-header">
            <!-- Header Collection -->
            <li class="collection-header"><h4>Sus cosas</h4></li>
            <!-- Body Collection -->
            @foreach($to->objects as $object)
            <li class="collection-item avatar">
              {!! Html::image('img/objects/'.$object->id.'.jpg', 'img', array('class' => 'circle materialboxed')) !!}
              <p> <b> {{$object->name}} </b> </p>
              <p>Categoria: {{$object->category->name}} <br>
                 Valor aprox: ${{$object->value}}
              </p>
              <p class="secondary-content">
                <input type="checkbox" class="right" id="right{{$itr}}" name="right{{$itr}}" value="{{$object->id}}" disabled/>
                <label for="right{{$itr++}}"></label>
              </p>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </form>
  </div>
  <!-- Modal fixed footer -->
  <div class="modal-footer">
    <div class="center">
      <a id="button-modal-footer" class="modal-close waves-effect waves-teal btn" onclick="main()">
        Proponer
      </a>
    </div>
  </div>
</div>
@stop

@section('script')
  {!! Html::script('js/barter.js') !!}
  {!! Html::script('js/modal.js') !!}
@stop
