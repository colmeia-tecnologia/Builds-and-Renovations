<div class='container'>
    <h1 class='center'>Services</h1>

    <div class='row'>
        @foreach ($services as $service)
            <div class='col m4 servicesContainer animated' id='servicesContainer'>
                <a href='/services/{{$service->name}}'>
                    <div class='center-align primary-text servicesContainerInside valign-wrapper'>
                        <div class='row'>
                            <div class='col s12'>
                                <img src='{{$service->image}}' alt='{{$service->name}}' class='img-responsive'>
                            </div>
                            <div class='col s12'>
                                {{$service->name}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>