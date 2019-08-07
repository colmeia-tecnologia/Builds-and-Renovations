<footer>
    <div class='center secondary'>
        <a href='#' id='backToTop' class='btn grey darken-4 white-text'>Back to top</a>
    </div>
    <div class='center primary'>
        <div class='socialMedias'>
            @foreach (Cache::get('socialMedias') as $socialMedia)
                <a href='{{$socialMedia->url}}' title='{{$socialMedia->name}}' class='grey-text text-darken-4'>
                    <img src='{{$socialMedia->icon}}' title='{{$socialMedia->name}}' alt='{{$socialMedia->name}}' class='img-resonsive'>
                </a>
            @endforeach
        </div>

        <hr class='white margin-top-g margin-bottom-p'>

        <div class='copyright'>
            <a href='https://colmeiatecnologia.com.br' title='Colmeia Tecnologia' target='_blank' class='white-text'>
                Colmeia Tecnologia
            </a>
        </div>
    </div>
</footer>