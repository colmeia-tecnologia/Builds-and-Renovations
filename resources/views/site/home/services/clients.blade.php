<div class="parallax-container clientsContainer padding-bottom-g padding-top-g">
    <div class="parallax"><img src="/img/clients.jpg" class='img-responsive'></div>

    <div class='container'>
        <div class='row'>
            <div class='col m7 s12'>
                <div class="video-container margin-top-g">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/i9-XM4PiMb4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class='col m5 s12 white-text right-align hide-on-small-only'>
                <ul class='clientsList' id='clientsList'>
                    @foreach ($clients as $client)
                        <li class='animated clientsListLi'>{{$client->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class='col m5 s12 white-text center-align show-on-small'>
                <ul class='clientsList' id='clientsList'>
                    @foreach ($clients as $client)
                        <li class='animated clientsListLi'>{{$client->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>