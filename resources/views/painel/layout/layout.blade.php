<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('painel.layout.meta')

        {{--Styles--}}
        {!! Html::style('css/painel/app.css') !!}
        {!! Html::style('css/painel/style.min.css') !!}
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top navbar-inverse">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            @include('painel.layout.menu')
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            @if (!Auth::guest())
                <div class='row'>
                    <div class='container'>
                        <div class='col-md-12 padding-bottom content'>
                            <div class='row'>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class='col-md-12'>
                    @yield('content')
                </div>
            @endif
        </section>

        <div class='clearfix'></div>

        <footer class='text-center'>
            &copy; 2017 - 
            <a href='http://colmeiatecnologia.com.br' alt='Colmeia Tecnolgia' title='Colmeia Tecnolgia'>
                Colmeia Tecnolgia
            </a>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/painel/toggle/toggle.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
