<footer class='text-center'>
    <div class='socialMedia'>
        @foreach (Cache::get('socialmedias') as $socialMedia)
            <a href='{{$socialMedia->url}}' title='{{$socialMedia->name}}'>
                {!!$socialMedia->icon!!}
            </a>
        @endforeach

        <a href='{{env('APP_URL')}}' title='Site'>
            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-globe fa-stack-1x fa-inverse"></i></span>
        </a>
    </div>

    <div class='copyright'>
        &copy; 2017 - 
        <a href='http://colmeiatecnologia.com.br' alt='Colmeia Tecnolgia' title='Colmeia Tecnolgia'>
            Colmeia Tecnolgia
        </a>
    </div>
</footer>