@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Novo Serviço</h1>
    </div>

    @include('painel.layout.errors')

    {!! Form::open(['route' => 'subservices.store']) !!}
        @include('painel.subservices._form')
    {!! Form::close() !!}
@endsection
