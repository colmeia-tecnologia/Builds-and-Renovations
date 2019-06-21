<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.layout.meta')

        {{--Styles--}}
        {!! Html::style('css/site/style.min.css') !!}
    </head>
    <body>
        <div id="app">
            @include('site.layout.float-button')

            @include('site.home.banner')

            @include('site.layout.header')
            
            <main>
                <div class='container'>
                    @yield('content')
                </div>
            </main>

            @include('site.layout.footer')
        </div>
    </body>
        
    <!-- Scripts -->
    {!! Html::script('/js/app.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') !!}

    <script>
        let indexSlogan = 0;
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 4500);
        }

        function typeSlogan()
        {
            var slogan = "Building your own paradise!";

            if(indexSlogan < slogan.length) {
                $('#slogan').append(slogan.charAt(indexSlogan));
                indexSlogan++;
                setTimeout(typeSlogan, 120);
            }
        }

        $('#backToTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });

        $(document).ready(function(){
            //Carousel
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: false,
            }).css(
                "height", $(window).height() - 10
            );
            autoplay();

            //Sticky Menu
            $('.pushpin').pushpin({
                top: $('.pushpin').offset().top
            });

            //ScroolSpy
            $('.scrollspy').scrollSpy();

            //Type slogan on banner
            typeSlogan();
        });


    </script>
    @yield('scripts')
</html>