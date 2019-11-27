<div class="carousel carousel-slider center bannerHome" id='carouselHome'>
    <div class="carousel-fixed-item center">
        <div>
            <div class='row'>
                <div class='col s10 offset-s1 m6 offset-m3 banner-logo'>
                    <img src='/img/logo-banner.png' alt='Builds and Renovations' class='responsive-img'>
                    <h2 id='slogan'></h2>
                </div>
            </div>

            <a class="btn btn-large waves-effect white-text primary" href='#contact'>Contact</a>
        </div>
    </div>

    @foreach ($banners as $banner)
        @php
            $image = $banner->image;
            $imageLg = $image;

            $imgExt = substr($image, -4, 4);
            $imageMd = $str_replace($image, $imgExt, '-md'.$imgExt);
            $imageSm = $str_replace($image, $imgExt, '-sm'.$imgExt);
        @endphp
        <div class="carousel-item">
            {{--Grande--}}
            <img src='{{$imageLg}}' class='responsive-img hide-on-med-and-down'>

            {{--Medio--}}
            <img src='{{$imageMd}}' class='responsive-img hide-on-small-only hide-on-large-only show-on-medium'>

            {{--Pequeno--}}
            <img src='{{$imageSm}}' class='responsive-img hide-on-med-only hide-on-large-only'>
        </div>
    @endforeach
</div>
        