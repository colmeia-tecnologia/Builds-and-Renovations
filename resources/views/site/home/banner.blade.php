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
        <div class="carousel-item">
            <img src='{{$banner->image}}' class='responsive-img'>
        </div>
    @endforeach
</div>
        