@extends('components.layouts.app')

@section('title')
    Inicio
@endsection

@section('home')
    <div class="home-content">
        <h1>Películas y series ilimitadas y mucho más</h1>
    </div>
    <div class="home-content">
        <p>Disfruta donde quieras. Cancela cuando quieras.</p>
    </div>
    <div>
        <div class="home-form">
            <p>¿Quieres ver Peli-App ya?</p>
            <p>Ingresa tu email para crear una cuenta o reiniciar tu membresía de Peli-App.</p>
            <form action="">
                <div class="form">
                    <input type="text">
                    <button type="submit">Comenzar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="img-peli">
        <img src="{{ URL('img/batmanArk.jpg') }}" alt="">
    </div>
@endsection

@section('promo')
    <div class="box-container">
        <div class="box">
            <img src="{{ URL('img/covenant.jpg') }}" alt="">
            <div class="content">
                <h2>Disfruta en tu TV</h2>
                <p>Ve en smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores de Blu-ray y más.</p>
            </div>
        </div>
        <hr />
        <div class="box">
            <img src="{{ URL('img/stark-trek.jpg') }}" alt="" >
            <div class="content ">
                <h2>Disfruta donde quieras</h2>
                <p>Películas y series ilimitadas en tu teléfono, tablet, computadora y TV.</p>
            </div>
        </div>
        <hr />
        <div class="box">
            <img src="{{URL('img/bowser.jpg')}}" alt="" >
            <div class="content">
                <h2>Descarga tus series para verlas offline</h2>
                <p>Guarda tu contenido favorito y tendrás siempre algo para ver.</p>
            </div>
        </div>
    </div>
@endsection

@section('question')
        <div class="container-title">
            <h2>Elige tu plan</h2>
        </div>
        <div class="container-price">
            <div class="container-price-card">
                <h1>3 meses</h1>
                <h2>$52.900,00</h2>
                <p>Igual a $17.633,33 al mes </p>
                <button>Elige este plan</button>
            </div>
            <div class="container-price-card">
                <h1>12 meses</h1>
                <h2>$100.000,00</h2>
                <p>Igual a $12.000,00 al mes</p>
                <button>Elige este plan</button>
            </div>
            <div class="container-price-card_mes">
                <h1>1 meses</h1>
                <h2>$24.900,00</h2>
                <button>Elige este plan</button>
            </div>
        </div>
@endsection
