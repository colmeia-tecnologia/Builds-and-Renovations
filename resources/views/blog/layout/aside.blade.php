<section>
    <h1>Posts em Destaque</h1>

    <div id="asideCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach ($likedPosts as $key=>$post)
                @php
                    $url = \App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
                    
                    $data = strtotime($post->created_at);
                    $data = date('d/m/Y', $data);
                @endphp

                <div class="item {{ $key == 0 ? 'active' : '' }}">
                    <a href='/blog/post/{{$post->id}}/{{$url}}' title="{{$post->title}}" >
                        <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive'><br/>
                        {{$post->title}}<br/>
                        <span class='pull-left'>{{$data}}</span>
                        <span class='pull-right'>{{$key+1}}/10</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <h1>Posts Recentes</h1>

    <div class='row'>
        @foreach ($recentPosts as $post)
            @php
                $url = \App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
                $data = strtotime($post->created_at);
                $data = date('d/m/Y', $data);
            @endphp

            <div class='col-md-12 recentPostItem margin-top'>
                <div class='row'>
                    <a href='/blog/post/{{$post->id}}/{{$url}}' title="{{$post->title}}">
                        <div class='col-md-4'>
                            <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive sideBarImg'>
                        </div>

                        <div class='col-md-7 col-md-offset-1'>
                            {{$post->title}}<br/>
                            <span class='data'>{{$data}}</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section>
    <h1>Arquivo</h1>

    <ul class='arquivo'>
        @foreach ($postDates as $date)
        @php
        $mes = App\Http\Controllers\Util\DateController::mesPorExtenso($date->month);
        @endphp
        <li>
            <a href='/blog/arquivo/{{$date->year}}/{{$date->month}}' title='{{$mes}} de {{$date->year}}'>{{$mes}} de {{$date->year}}</a>
        </li>
        @endforeach
    </ul>
</section>

{{--<section>
    <h1>Siga</h1>

    <ul class='siga'>
        <li>
            <a href='arquivo/ano/mes' title='Facebook'>Facebook</a>
        </li>
        <li>
            <a href='arquivo/ano/mes' title='Instagram'>Instagram</a>
        </li>
    </ul>
</section>--}}