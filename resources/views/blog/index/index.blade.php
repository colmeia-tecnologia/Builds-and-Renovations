@extends('blog.layout.layout')

@section('blog-content')
    <section class='section'>
        <div class='text-center'>
            <h1>Blog Builds and Renovations</h1>
        </div>

        <div class='row'>
            @foreach ($posts as $post)
                @php
                    $linkTitle = App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
                @endphp
            
                <div class='col m6 blogIndexItem margin-bottom-g'>
                    <a href='{{route('blog.show', ['title' => $post->title, 'id' => $post->id])}}' title='{{$post->title}}'>
                        <img src='{{$post->image}}' alt='{{$post->title}}' class='responsive-img'>
                        <div class='margin-top-p'>
                            <h1>{{$post->title}}</h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class='center-align'>
            {{$posts->render()}}
        </div>
    </section>
@endsection