<section id="contact" class="section scrollspy secondary">
    <div class='container'>
        <h1 class='center'>Contact us</h1>

        <div class='row'>
            <div class='col m6 s12 push-m6 animated' id='contact-form'>
                {!! Form::open(['route' => 'site.contact.send']) !!}
                    @include('site.forms.contact')
                {!! Form::close() !!}
            </div>
            <div class='col m6 s12 pull-m6'>
                <p>
                    Send us your doubts, suggestions or ask for for a budget request without commitment.
                </p>

                <p>
                    @foreach (Cache::get('emails') as $email)
                        <a href='mailto:{{$email->email}}' class='link'>{{$email->email}}</a><br/>
                    @endforeach
                </p>
                <p>
                    @foreach (Cache::get('telephones') as $telephone)
                        <a href='tel:{{$telephone->telephone}}' class='link'>{{$telephone->telephone}}</a><br/>
                    @endforeach
                </p>
                <p>
                    4213 Summit Creek Boulevard #7308<br/> 
                    Hunter’s Creek - Orlando - Florida<br/>
                    32837
                </p>
            </div>
        </div>
    </div>
</section>