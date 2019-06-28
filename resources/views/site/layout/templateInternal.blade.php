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

            @include('site.layout.headerInternal')
            
            <main>
                @yield('content')
            </main>

            @include('site.layout.footer')
        </div>
    </body>
        
    <!-- Scripts -->
    {!! Html::script('/js/app.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') !!}
    {!! Html::script('/js/site/jquery.waypoints.min.js') !!}
    {!! Html::script('/js/site/menu.min.js') !!}
    {!! Html::script('/js/site/animations.min.js') !!}
    {!! Html::script('/js/site/home.min.js') !!}
    @yield('scripts')
</html>