<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.layout.meta')

        {{--Styles--}}
        {!! Html::style('css/app.css') !!}
        @yield('css')
        {!! Html::style('css/site/style.min.css') !!}
    </head>
    <body>
        <div id="app">
        </div>
    </body>
        
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</html>