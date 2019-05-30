@extends('landing-pages.layout.template')

@section('content')
    <div class='row'>
        <div class='col-md-7 imageContainer'>
            <p>
                {!! $landingPage->description !!}
            </p>

            <div class='image text-center'>
                <img src='{{$landingPage->image}}' alt='{{$landingPage->title}}' title='{{$landingPage->title}}' class='img-responsive'>
            </div>
        </div>
        <div class='col-md-5 formContainer'>
            <div class='title text-center'>
                <h2>{{ $landingPage->form_title }}</h2>
            </div>

            <p class='legend'>
                * Preencha os campos e receba já em seu e-mail!
            </p>

            {!! $landingPage->form !!}

            <p class='legend'>
                * Estamos comprometidos em resguardar suas informações.<br/>
                Conheça nossa 
                <a href='' title='Politica de Privacidade'>Politica de Privacidade</a>
            </p>
        </div>
    </div>
    <div class='row'>
        <div class='container text'>
            {!! $landingPage->text !!}
        </div>
    </div>
@endsection