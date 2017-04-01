@extends('layouts.template')

@section('title', 'Login')

@section('content')
<div class="section">
  <div class="container">
    <br>
    <br>
    <!-- Header -->
    <h1 class="header center orange-text">Bartef!</h1>

    <!-- Introduction text -->
    <h5 class="header center light">Ingresa tu contraseña de invitado</h5>

    <!-- Form Sign In -->
    {!! Form::open(['action' => 'AuthController@check', 'method' => 'POST']) !!}
      <div class="row">
        <div class="input-field col offset-s4 s4">
          {!! Form::password('password', ['class' => 'validate']) !!}
          {!! Form::label('password', 'Contraseña') !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@stop
