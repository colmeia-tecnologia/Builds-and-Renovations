@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Novo E-book</h1>
    </div>

    @include('painel.layout.errors')

    {!! Form::open(['route' => 'ebooks.store']) !!}
        @include('painel.ebooks._form')
    {!! Form::close() !!}
@endsection
