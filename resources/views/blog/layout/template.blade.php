@extends('site.layout.template')

@section('content')
    <div class='containerBlog parallax'>
        {{--<video width="1354" height="668" poster="{{asset('img/template/poster-movie-city.png')}}" autobuffer="true" autoplay loop>
            <source src="{{asset('movie/city.mp4')}}"type="video/mp4">
        </video>--}}

        <div class='container'>
            <div class='containerBlack'>
                <div class='row'>
                    <div class='col-md-9'>
                        @yield('content-blog')
                    </div>
                    <div class='col-md-3 hidden-sm hidden-xs'>
                        <aside>
                            @include('blog.layout.aside')
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection