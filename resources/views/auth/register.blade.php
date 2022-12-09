@extends('layouts.app')
@section('titulo')
Login
@endsection
@section('content')
<section class="register">
    <form action="">
        <div class="register-container">
            <div class="register-container__logo"></div>
            <div class="register-container__formulario">
                <h2 class="register-container__formulario__h2">Bienvenido</h2>
                <label class="register-container__formulario__label" for="name">Full Name</label>
                <input class="register-container__formulario__input" type="text" id="name"  name="name" placeholder="Enter your full name here">
                <label class="register-container__formulario__label" for="email">Email</label>
                <input class="register-container__formulario__input" type="text" id="email"  name="email" placeholder="Enter your email here">
                <label class="register-container__formulario__label" for="password">Password</label>
                <input class="register-container__formulario__input" type="password" id="password"  name="password" placeholder="Enter your password here">
                <button class="register-container__button">Create Account</button>
                <label class="register-container__formulario__label" for="">¿Ya tienes una cuenta?<a class="register-container__formulario__label__a" href="/iniciar-sesion">Inicia Sesión Aquí</a></label>
            </div>
        </div>
    </form>
</section>
@endsection