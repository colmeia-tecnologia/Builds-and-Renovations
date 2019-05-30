<div class='row'>
    <div class='col-md-6 hidden-sm hidden-xs'>
        {{--Pares--}}
        @for ($i=0; $i<count($posts); $i+=2)
            @php
                $post = $posts[$i];
                $url = \App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
            @endphp

            <div class='blogItem'>
                <div class='blogItemContent'>
                    <h1>{{$post->title}}</h1>
                    <h2>{{$post->created_at->format('d/m/Y')}} | {{$post->author->name}}</h2>

                    <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive'>

                    <p>
                        {{$post->description}}
                    </p>

                    <div class='text-center margin-top'>
                        <a 
                            href='/blog/post/{{$post->id}}/{{$url}}' 
                            title="{{$post->title}}" 
                            class='btnLeia'
                        >
                            Leia Mais
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class='col-md-6 hidden-sm hidden-xs'>
        {{--Pares--}}
        @for ($i=1; $i<count($posts); $i+=2)
            @php
                $post = $posts[$i];
                $url = \App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
            @endphp

            <div class='blogItem'>
                <div class='blogItemContent'>
                    <h1>{{$post->title}}</h1>
                    <h2>{{$post->created_at->format('d/m/Y')}} | {{$post->author->name}}</h2>

                    <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive'>

                    <p>
                        {{$post->description}}
                    </p>

                    <div class='text-center margin-top'>
                        <a 
                            href='/blog/post/{{$post->id}}/{{$url}}' 
                            title="{{$post->title}}" 
                            class='btnLeia'
                        >
                            Leia Mais
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </div>


    <div class='col-md-6 hidden-md hidden-lg hidden-xl'>
        {{--Pares--}}
        @foreach ($posts as $post)
            @php
                $url = \App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
            @endphp

            <div class='blogItem'>
                <div class='blogItemContent'>
                    <h1>{{$post->title}}</h1>
                    <h2>{{$post->created_at->format('d/m/Y')}} | {{$post->author->name}}</h2>

                    <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive blogContentImgCenter'>

                    <p>
                        {{$post->description}}
                    </p>

                    <div class='text-center margin-top'>
                        <a 
                            href='/blog/post/{{$post->id}}/{{$url}}' 
                            title="{{$post->title}}" 
                            class='btnLeia'
                        >
                            Leia Mais
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class='col-md-12 text-center'>
        {{$posts->render()}}
    </div>
</div>