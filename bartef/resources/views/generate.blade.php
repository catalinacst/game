@extends('layouts.template')

@section('title', 'Generar contraseña')

@section('content')
<div class="section">
  <div class="container">
    <br>
    <br>
    <!-- Introduction text -->
    <h5 class="header center light">Ingresa tu contraseña de desarrollador</h5>

    <input id="flag" type="hidden" value='{{$state->flag}}'>

    <div class="center row">
      <div class="input-field col offset-s2 s6">
        <input id="password" type="password" class="validate" required>
        <label for="password">Contraseña</label>
      </div>
      <div class="col s2">
        <a class="btn-floating btn-large waves-effect waves-light red" onclick="query()">
          <i class="material-icons">send</i>
        </a>
      </div>
    </div>
    <br>
    <br>
    <!-- Button refresh -->
    <div id="refresh" class="center" style="display: none;">
      <h5 class="header light">La aplicación esta activada.</h5>
      <a href="/refresh" class="waves-effect waves-light btn">Desactivar<a>
    </div>

    <!-- Form Generate -->
    <div id="generate" class="center row" style="display: none;">
      {!! Form::open(['action' => 'AuthController@store', 'method' => 'POST']) !!}
        <div class="input-field col offset-s2 s6">
          {!! Form::text('newpass', '', ['id' => 'newpass', 'class' => 'validate']) !!}
          {!! Form::label('newpass', 'Nueva contraseña') !!}
        </div>
        <br><br>
        <!-- Random -->
        <a class="waves-effect waves-light btn teal lighten-2" onclick="random()">
          Random
        </a>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop

@section('script')
{!! Html::script('js/generate.js') !!}
@stop
