<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.layout.meta')

        {{--Styles--}}
        {!! Html::style('css/site/style.min.css') !!}
        @yield('css')

        {{--Recaptcha--}}
        {{--<script>
            var onloadCallback = function() {
                grecaptcha.render('recaptcha', {
                    'sitekey' : '6LfUickUAAAAAIHxWpTaLSos_dVcdnGUKjDaYGWP'
                });
            };

        </script>--}}
    </head>
    <body>
        <div id="app">
            @include('site.layout.float-button')
            @include('site.layout.modal')

            {{--If is site route show banners--}}
            @if(substr(Route::currentRouteName(), 0, 5) == 'site.' )
                @include('site.home.banner')
            @endif

            @include('site.layout.header')
            
            <main>
                @yield('content')
            </main>

            @include('site.layout.footer')
        </div>
    </body>
        
    <!-- Scripts -->
    {!! Html::script('/js/app.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') !!}
    {!! Html::script('/js/common/jquery.maskedinput.min.js') !!}
    {!! Html::script('/js/site/jquery.waypoints.min.js') !!}
    {!! Html::script('/js/common/jsMascaras.min.js') !!}
    {!! Html::script('/js/site/animations.min.js') !!}
    {!! Html::script('/js/site/menu.min.js') !!}

    <script>
        @if($errors->any())
            $('html,body').animate({
                scrollTop: $("#contact-form").offset().top - 100
            }, 0);
        @endif

        @if(Session::has('status_mail') && Session::get('status_mail') == true)
            M.toast({
                html: 'Email successfully sent!',
                classes: 'green accent-4'
            });
        @elseif(Session::has('status_mail') && Session::get('status_mail') == false)
            M.toast({
                html: 'Failed to send E-mail.',
                classes: 'red'
            });
        @endif
    </script>

    {{--Recaptcha--}}
    {{--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>--}}

    @yield('scripts')
    {!! Html::script('/js/site/home.min.js') !!}
</html>