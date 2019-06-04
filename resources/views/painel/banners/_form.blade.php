<div class='col-md-4'>
    <a data-toggle="modal" href="/upload" data-target="#uploadModal">
        @if(!isset($banner))
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
                src='{{$banner->image}}' 
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
        <span class="input-group-addon" id="title">Title</span>
        {!! Form::input('text', 'title', null, ['class' => 'form-control', 'aria-describedby' => 'title']) !!}
    </div>
</div>

<div class='col-md-8 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="order">Order</span>
        {!! Form::input('number', 'order', null, ['class' => 'form-control', 'aria-describedby' => 'order', 'min' => 0]) !!}
    </div>
</div>

<div class='col-md-8 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="active">Active</span>
        {!! Form::select('active', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control', 'aria-describedby' => 'active']) !!}
    </div>
</div>

<div class='col-md-8 margin-top'>
    <label for='description'>Description</label>
    <textarea name="description" id='description' id='description' class='tinymce'>{{$banner->description or ''}}</textarea>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Save&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

@section('scripts')
    {!! Html::script('/js/painel/tinymce/tinymce.min.js') !!}
    {!! Html::script('/js/painel/upload.min.js') !!}
@endsection