@extends('site.layout.templateInternal')

@section('content')
    <div class='container pageIntern'>
        <div class='row'>
            <div class='col s12 center-align'>
                <h1>{{$service->name}}</h1>
            </div>
            
            @foreach ($service->subservices as $subservice)
                <div class='col l3 m4 s6 subservicesContainer animated center-align '>
                        <div class='primary white-text subservicesContainerInside'>
                            <span class='center-align'>{{$subservice->name}}</span><br/>

                            
                            {{--<a href='/services/{{$service->name}}/{{$subservice->name}}' class='secondary primary-text askNow'>--}}
                            <a href='http://klickpages.buildsandrenovations.com/BRServicesOrgSiteForm' class='secondary primary-text askNow'>
                                Ask Now
                            </a>
                        </div>
                </div>
            @endforeach


            <div class='col s12 center-align margin-top-g margin-bottom-g'>
                <a href='/' class='back'>
                    <i class="material-icons medium">arrow_back</i>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.subservicesContainer').each(function(i){
            var sub = $(this);
            setTimeout(function() {
                sub.addClass('fliped');
            }, 300*i);
        });
    </script>
@endsection