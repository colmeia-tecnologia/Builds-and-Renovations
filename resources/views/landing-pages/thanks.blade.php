@extends('landing-pages.layout.template')

@section('content')
    <div class='row thanksContainer'>
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
                <h2>Obrigado</h2>
            </div>

            <p class='thanks'>
                Agradecemos pelo seu interesse em nosso e-book "{{$landingPage->title}}".
            </p>

            <div class='text-center'>
                <a 
                    href="https://marketing.reformweb.com.br/asset/2:ebook---tecnologia-e-evolucao-na-construcao" 
                    title="Fazer" 
                    class="download"
                >
                    Fazer Download
                </a>
            </div>
        </div>
    </div>
@endsection