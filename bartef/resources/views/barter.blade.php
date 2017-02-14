@extends('layouts.master')

@section('title', 'Barter')

@section('content')
<div class="section">
  <div class="container">
    <input type="hidden" id="idUser" value="{{$to->id}}">
    <form action="/exchange/{{$to->id}}" id="form-exchange">
      <div class="row">
        <br><br>

        <!-- Left -->
        <div class="col s6">
          @foreach($from->objects as $object)
          <p>
            <input type="checkbox" class="left" id="left{{$itl}}" name="left{{$itl}}" value="{{$object->id}}" />
            <label for="left{{$itl++}}">{{$object->name}}, {{$object->value}}, {{$object->category->name}}</label>
          </p>
          @endforeach
        </div>

        <!-- Right -->
        <div class="col s6">
          @foreach($to->objects as $object)
            <div>
              <p>
                <input type="checkbox" class="right" id="right{{$itr}}" name="right{{$itr}}" value="{{$object->id}}" disabled/>
                <label for="right{{$itr++}}">{{$object->name}}, {{$object->value}}, {{$object->category->name}}</label>
              </p>
            </div>
          @endforeach
        </div>

        <br><br>
      </div>
    </form>

    <!-- Button Proponer -->
    <div class="center">
      <button class="btn waves-effect waves-light btn" type="submit" onclick="main()">Proponer
        <i class="material-icons right">send</i>
      </button>
    </div>

    <br>

    <!-- Button Get Started -->
    <div class="center">
      <button class="btn waves-effect waves-light orange btn-large" type="submit" form="form-exchange">Aceptar
        <i class="material-icons right">done</i>
      </button>
    </div>

    <br><br>
  </div>
</div>
@stop

@section('script')
  {!! Html::script('js/barter.js') !!}
@stop
