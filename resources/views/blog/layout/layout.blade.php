@extends('site.layout.template')

@section('css')
    {!! Html::style('/css/blog/style.min.css') !!}
@endsection

@section('content')
    <div class='container containerBlog'>
        <div class='row'>
            <div class='col m9 blogContent'>
                @yield('blog-content')
            </div>

            <div class='col m3 sidebar hidden-sm hidden-xs'>
                <aside>
                    @include('blog.layout._sidebar')
                </aside>
            </div>
        </div>
    </div>
@endsection