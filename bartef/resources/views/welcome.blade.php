@extends('layouts.template')

@section('title', 'Welcome')

@section('content')

<div class="section">
  <div class="container">
    <br><br>

    <!-- Header -->
    <h1 class="header center orange-text">Bienvenido!</h1>

    <!-- Introduction text -->
    <h5 class="header center light">Ingresa tu nombre de usuario y tus intereses</h5>
    <br>
    <br>
    <!-- Form username and interests -->
    <div class="row center">
      <form action="store" class="col s12" id="form-get-started">

        <!-- Username -->
        <div class="row">
          <div class="input-field col s6 offset-s3">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" name="username" type="text" class="validate" required>
            <label for="name">Username</label>
          </div>
        </div>

        <!-- Interests -->
        <div class="row">
        @for ($i = 0, $size = count($categories), $c = 'category0'; $i < $size; $i++, $c = 'category'.$i)
          <div class="col s4">
            <p>
              <input type="checkbox" id={{$c}} name={{$c}} />
              <label for={{$c}}>{{ $categories[$i]->name }}</label>
            </p>
          </div>
        @endfor
        </div>

        <!-- Button Get Started -->
        <div class="center">
          <button class="btn waves-effect waves-light orange btn-large" type="submit" form="form-get-started">Empezar
            <i class="material-icons right">send</i>
          </button>
        </div>

      </form>
    </div>

    <br><br>
  </div>
</div>

@stop
