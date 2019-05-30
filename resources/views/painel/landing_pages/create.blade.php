@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Nova Landing Page</h1>
    </div>

    @include('painel.layout.errors')

    {!! Form::open(['route' => 'landing_pages.store']) !!}
        @include('painel.landing_pages._form')
    {!! Form::close() !!}
@endsection
