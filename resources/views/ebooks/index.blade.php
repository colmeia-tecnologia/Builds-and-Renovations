@extends('ebooks.layout.template')

@section('content')
    <div class='row'>
        @php
            $count = 0;
        @endphp

        @foreach ($ebooks as $ebook)
            @if($count%3 == 0)
                </div>
                <div class='row'>
            @endif

            <div class='col-md-4 col-sm-6 ebookItem'> 
                @php
                    $url = \App\Http\Controllers\Util\UrlController::friendlyUrl($ebook->landingPage->title);
                @endphp
                <a href='{{env('APP_URL')}}/landing-page/{{$url}}' class='linkEbook'>
                    <img src='{{$ebook->image}}' alt='{{$ebook->title}}' title='{{$ebook->title}}' class='img-responsive ebookImg'>

                    <h2>{{$ebook->title}}</h2>

                    <p class='ebookDescription'>{{$ebook->description}}</p>
                </a>
            </div>

            @php
                $count++;
            @endphp
        @endforeach
    </div>
@endsection