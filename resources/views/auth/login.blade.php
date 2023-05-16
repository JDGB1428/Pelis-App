@extends('components.layouts.form-app')

@section('title')
    Iniciar sesion
@endsection

@section('content')
    <div class="form-login">
        <h1>@yield('title')</h1>
        <form action="" method="post">
            <div class="box-correo">
                <input type="text" placeholder="Correo">
            </div>
            <div class="box-contraseña">
                <input type="text" placeholder="Contraseña">
            </div>
            <div class="box-login">
                <button type="submit">Iniciar sesion</button>
            </div>
            <div class="account">
                <a href="{{route('registrar')}}">¿No tienes cuenta aún?</a>
            </div>
        </form>
    </div>
    <div class="gradient"></div>
@endsection
