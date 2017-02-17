@extends('layouts.master')

@section('title', 'Barter')

@section('content')
<!-- Exchange zone -->
<div class = "section">
  <!-- User id -->
  <input type="hidden" id="idUser" value="{{$to->id}}">
  <!-- Usernames and objects proposed -->
  <div class="row">
    <!--- User 1 -->
    <div class="col s12 l6 m12">
      <!-- Username -->
      <h4 class="center">{{ $from->name }}</h4>
      <!-- Objects proposed -->
      <div class="#b0bec5 blue-grey lighten-3 inter01">
        <div class="row">
          <!-- foreach -->
          <div class="col s2">
            <div class="objects01 sub-inter"></div>
          </div>
          <!-- end foreach -->
        </div>
      </div>
    </div>
    <!--- User 2 -->
    <div class="col s12 l6 m12">
      <!-- Username -->
      <h4 class="center">{{ $to->name }}</h4>
      <!-- Objects proposed -->
      <div class="#b0bec5 blue-grey lighten-3 inter01">
        <div class="row">
          <!-- foreach -->
          <div class="col s2">
            <div class="objects02 materialboxed sub-inter" data-caption="A picture"></div>
          </div>
          <!-- end foreach -->
        </div>
      </div>
    </div>
  </div>
  <!-- Buttons Regresar, Proponer or Aceptar -->
  <div class = "center">
      <!-- Back to Home -->
      <a class="waves-effect waves-light btn" href="/home">Regresar</a>
      <!-- Accept -->
      <button class="btn-floating btn btn-large waves-effect waves-light orange" type="submit" form="form-exchange">
        <i class="material-icons right">done</i>
      </button>
      <!-- Call main() -->
      <a class="waves-effect waves-light btn" onclick="main()">Proponer</a>
    </div>
</div>

<!-- Display objects -->
<div class="section">
  <form action="/exchange/{{$to->id}}" id="form-exchange">
    <div class="row">
      <!-- My objects -->
      <div class="col s6">
        <!-- Collection my objects -->
        <ul class="collection with-header">
          <!-- Header Collection -->
          <li class="collection-header"><h4>Mis cosas</h4></li>
          <!-- Body Collection -->
          @foreach($from->objects as $object)
          <li class="collection-item avatar">
            {!! Html::image('img/objects/'.$object->id.'.jpg', 'img', array('class' => 'circle materialboxed')) !!}
            <span class="title">{{$object->name}}</span>
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
      <!-- Their objects -->
      <div class="col s6">
        <!-- Collection their objects -->
        <ul class="collection with-header">
          <!-- Header Collection -->
          <li class="collection-header"><h4>Sus cosas</h4></li>
          <!-- Body Collection -->
          @foreach($to->objects as $object)
          <li class="collection-item avatar">
            {!! Html::image('img/objects/'.$object->id.'.jpg', 'img', array('class' => 'circle materialboxed')) !!}
            <span class="title">{{$object->name}}</span>
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
@stop

@section('script')
  {!! Html::script('js/barter.js') !!}
@stop
