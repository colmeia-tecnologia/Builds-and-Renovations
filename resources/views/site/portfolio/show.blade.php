<div class='row'>
    <div class='col m6 s12 modalImage'>
        <img src='{{$portfolio->firstImage()}}' class='responsive-img' alt='{{$portfolio->title}}'>
    </div>
    <div class='col m6 s12 center'>
        <h1>{{$portfolio->title}}</h1>
    </div>
    <div class='col s12'>
        {!! $portfolio->text !!}

        @if(isset($portfolio->url) && $portfolio->url != '')
            <div class="video-container margin-top-g">
                <iframe width="853" height="480" src="{{$portfolio->url}}" frameborder="0" allowfullscreen></iframe>
            </div>
        @endif

        <div class="carousel" id='carouselModal'>
            @foreach ($portfolio->images as $image)
                <a class="carousel-item">
                    <img src="{{$image->image}}" class='responsive-img portfolioCarouselImage' alt='{{$image->description}}' title='{{$image->title}}'>
                </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#carouselModal').carousel({
            numVisible: 3
        });
    });
</script>