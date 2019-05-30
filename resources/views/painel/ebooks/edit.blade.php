@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>
            Alterar E-book: {{$ebook->title}}  - ID: {{$ebook->id}}
        </h1>
    </div>

    <div class='col-md-12'>
        @include('painel.layout.errors')
    </div>

    {!! Form::model($ebook, ['route' => ['ebooks.update', $ebook->id], 'method' => 'put']) !!}
        @include('painel.ebooks._form')
    {!! Form::close() !!}
@endsection