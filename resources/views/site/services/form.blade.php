@extends('site.layout.templateInternal')

@section('content')
    <div class='container pageIntern'>
        <div class='row'>
            <div class='col s12 center-align'>
                <h1>Request Service</h1>
            </div>
            
            {!! Form::open(['route' => 'site.services.send']) !!}
                @include('site.forms.service')
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts') 
    <script>
        $('#service').val('{{$service}}');
        $('#subservice').val('{{$subservice}}');

        $(document).ready(function(){
            $('select').formSelect();
        });

        $('#service').change(function(){
            var service = $(this).val();
            $.get("/services/search/"+service, function(data) {
                $("#subservice").html(data);
                $('select').formSelect();
            });
        });

        @if(Session::has('status_mail') && Session::get('status_mail') == true)
            M.toast({
                html: 'Email successfully sent!',
                classes: 'green accent-4'
            });
        @elseif(Session::has('status_mail') && Session::get('status_mail') == false)
            M.toast({
                html: 'Failed to send E-mail.',
                classes: 'red'
            });
        @endif
    </script>
@endsection