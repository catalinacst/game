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
          <input type="checkbox" class="left" id="{{$object->name}}" name="{{$object->name}}" value="{{$object->value}}" />
          <label for="{{$object->name}}">{{$object->name}}, {{$object->value}}</label>
        </p>
        @endforeach
      </div>

      <!-- Right -->
      <div class="col s4 offset-s2">
        @foreach($to->objects as $object)
          <div>
            <p>
              <input type="checkbox" class="right" id="{{$object->name}}" name="{{$object->name}}" value="{{$object->value}}" disabled/>
              <label for="{{$object->name}}">{{$object->name}}, {{$object->value}}</label>
            </p>
          </div>
        @endforeach
      </div>

    </div>
    <br><br>
    <!-- Button Proponer -->
    <div class="center">
      <button class="btn waves-effect waves-light orange btn-large" type="submit" onclick="foo()">Proponer
        <i class="material-icons right">send</i>
      </button>
    </div>
    <br><br>
  </div>
</div>
@stop

@section('script')
<script>
var n;
var value;
var weight;

function solver(id, remW) {
  if (remW == 0 || id == n) return 0;
  if (weight[id] > remW) return solver(id + 1, remW);
  return Math.max(solver(id + 1, remW), value[id] + solver(id + 1, remW - weight[id]));
}

function foo() {
  n = 0;
  value = [];
  weight = [];
  var acc = 0;
  $('.left:checked').each(function() {
    acc += Number($(this).val());
  });
  $('.right').each(function() {
    var x = Number($(this).val());
    value.push(x);
    weight.push(x);
    n++;
  });
  var ans = solver(0, acc);
  console.log(ans);
}
</script>
@stop
