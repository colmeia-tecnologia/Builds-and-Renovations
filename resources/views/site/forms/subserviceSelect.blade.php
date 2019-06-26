@foreach ($subservices as $subservice)
    <option value='{{$subservice->name}}'>{{$subservice->name}}</option>
@endforeach