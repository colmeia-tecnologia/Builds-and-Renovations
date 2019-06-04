<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="service_id">Service</span>
        {!! Form::select('service_id', $services, null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="name">Name</span>
        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'aria-describedby' => 'name']) !!}
    </div>
</div>

<div class='col-md-6 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="active">Active</span>
        {!! Form::select('active', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control', 'aria-describedby' => 'active']) !!}
    </div>
</div>

<div class='col-md-12 margin-top'>
    <label for='description'>Description</label>
    <textarea name="description" id='description' class='tinymce'>{{$subservice->description or old('text')}}</textarea>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Save&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

@section('scripts')
    {!! Html::script('/js/painel/tinymce/tinymce.min.js') !!}
@endsection