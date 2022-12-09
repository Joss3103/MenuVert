@extends('layouts.app')
@section('titulo')
Login-Vista
@endsection
@section('content')
<div class="login">
    <div class="login-container">
        <div class="login-container__imagen">

        </div>
        <div class="login-container__form">
            <form action="" method="POST">
                @csrf
                <h1 class="login-container__h1">Ingresa a tu cuenta</h1>
                <label class="login-container__label" for="email"> Correo electrónico</label>
                <input class="login-container__input" type="text" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                <label class="login-container__label" for="password"> Contraseña</label>
                <input class="login-container__input" type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
                <h3 class="login-container__h3">¿No tienes cuenta? <a class="login-container__a"href="/crear-cuenta">Crea Cuenta</a></h3>
                <button class="login-container__button"><a class="login-container__button-a" href="">Iniciar Sesión</a></button>
            </form>
        </div>
    </div>
</div>
@endsection