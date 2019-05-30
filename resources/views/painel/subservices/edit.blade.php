@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>
            Alterar Serviço: {{$subservice->title}}  - ID: {{$subservice->id}}
        </h1>
    </div>

    <div class='col-md-12'>
        @include('painel.layout.errors')
    </div>

    {!! Form::model($subservice, ['route' => ['subservices.update', $subservice->id], 'method' => 'put']) !!}
        @include('painel.subservices._form')
    {!! Form::close() !!}
@endsection