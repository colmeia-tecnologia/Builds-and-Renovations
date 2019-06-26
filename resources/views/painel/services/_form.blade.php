<div class='col-md-4'>
    <a data-toggle="modal" href="/upload" data-target="#uploadModal">
        @if(!isset($service))
            <img 
                src='{{ asset('img/template/painel/sem-imagem.jpg') }}' 
                alt='Click to select the image' 
                title='Click to select the image' 
                class='img-responsive'
                id='image-uploaded'
            >
            {!! Form::input('hidden', 'image', null, ['id' => 'image']) !!}
        @else
            <img 
                src='{{$service->image}}' 
                alt='Click to select the image' 
                title='Click to select the image' 
                class='img-responsive'
                id='image-uploaded'
            >
            {!! Form::input('hidden', 'image', null, ['id' => 'image']) !!}
        @endif
    </a>

    @include('painel.upload.modal')
</div>

<div class='col-md-8'>
    <div class="input-group">
        <span class="input-group-addon" id="name">Name</span>
        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'aria-describedby' => 'name']) !!}
    </div>
</div>

{{--<div class='col-md-4 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="color">Background Color</span>
        {!! Form::input('color', 'color', null, ['class' => 'form-control', 'aria-describedby' => 'color']) !!}
    </div>
</div>--}}

<div class='col-md-8 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="active">Active</span>
        {!! Form::select('active', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control', 'aria-describedby' => 'active']) !!}
    </div>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Save&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

@section('scripts')
    {!! Html::script('/js/painel/upload.min.js') !!}
@endsection