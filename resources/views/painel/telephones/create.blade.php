@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>New Telephone</h1>
    </div>

    @include('painel.layout.errors')

    {!! Form::open(['route' => 'telephones.store']) !!}
        @include('painel.telephones._form')
    {!! Form::close() !!}
@endsection
