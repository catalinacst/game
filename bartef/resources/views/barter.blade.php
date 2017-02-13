@extends('layouts.master')

@section('title', 'Barter')

@section('content')
<div class="section">
  <div class="container">
    <div class="row">
      <br><br>

      <!-- Left -->
      <div class="col s4 offset-s1">
        @foreach($from->objects as $object)
        <p>
          <input type="checkbox" class="left" id="{{$object->name}}" name="{{$object->name}}" value="{{$object->id}}" />
          <label for="{{$object->name}}">{{$object->name}}, {{$object->value}}</label>
        </p>
        @endforeach
      </div>

      <!-- Right -->
      <div class="col s4 offset-s2">
        @foreach($to->objects as $object)
          <div>
            <p>
              <input type="checkbox" class="right" id="object{{$it}}" name="object{{$it}}" value="{{$object->value}}" disabled/>
              <label for="object{{$it++}}">{{$object->name}}, {{$object->value}}</label>
            </p>
          </div>
        @endforeach
      </div>

    </div>
    <br><br>
    <!-- Button Proponer -->
    <div class="center">
      <button class="btn waves-effect waves-light orange btn-large" type="submit" onclick="main()">Proponer
        <i class="material-icons right">send</i>
      </button>
    </div>
    <br><br>
  </div>
</div>
@stop

@section('script')
  {!! Html::script('js/barter.js') !!}
@stop
