@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>
            Alterar Landing Page: {{$landingPage->title}}  - ID: {{$landingPage->id}}
        </h1>
    </div>

    <div class='col-md-12'>
        @include('painel.layout.errors')
    </div>

    {!! Form::model($landingPage, ['route' => ['landing_pages.update', $landingPage->id], 'method' => 'put']) !!}
        @include('painel.landing_pages._form')
    {!! Form::close() !!}
@endsection