<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.layout.analytics')
        @include('site.layout.meta')

        {{--Styles--}}
        {!! Html::style(env('APP_URL').'/css/app.min.css') !!}
        {!! Html::style(env('APP_URL').'/css/landing-pages/style.min.css') !!}
            
        @include('site.layout.facebookPixel')
    </head>
    <body>
        @include('landing-pages.layout.header')

        <section>
            @yield('content')
        </section>

        @include('landing-pages.layout.footer')
    </body>
        
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {!! Html::script('/js/common/analytics.min.js') !!}

    @yield('scripts')
</html>