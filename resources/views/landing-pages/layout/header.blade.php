<header>
    <nav class="navbar navbar-default navbar-inverse navbar-static-top navbar-fixed-top">
        <div class="container-fluid">
            <div class='nav navbar-nav navbar-left'>
                <h1>{{$landingPage->title}}</h1>
            </div>

            <div class='nav navbar-nav navbar-right'>
                <a href="{{route('home')}}">
                    <img src='{{asset('img/reform.png')}}' alt='{{ config('app.name') }}' title='{{ config('app.name') }}' class='logo'>
                </a>
            </div>
        </div>
    </nav>
</header>