<section id="contact" class="section scrollspy secondary">
    <div class='container'>
        <h1 class='center'>Contact us</h1>

        <div class='row'>
            <div class='col m6 s12'>
                <p>
                    Send us your doubts, suggestions or ask for for a budget request without commitment.
                </p>

                <p>
                    <a href='mailto:sales@buildsandrenovations.com' class='link'>sales@buildsandrenovations.com</a>
                </p>
                <p>
                    <a href='tel:+1 (407) 730-1133' class='link'>+1 (407) 730-1133</a>
                </p>
                <p>
                    4213 Summit Creek Boulevard #7308<br/> 
                    Hunter’s Creek - Orlando - Florida<br/>
                    32837
                </p>
            </div>
            <div class='col m6 s12 animated' id='contact-form'>
                {!! Form::open(['route' => 'site.contact.send']) !!}
                    @include('site.forms.contact')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>