@extends('blog.layout.template')

@section('css')
    {!! Html::style('css/blog/style.min.css') !!}
@endsection

@section('content-blog')
    @include('blog.pages.index');
@endsection