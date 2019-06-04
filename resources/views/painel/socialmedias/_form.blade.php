<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="name">Name</span>
        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'aria-describedby' => 'name']) !!}
    </div>
</div>

<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="url">URL</span>
        {!! Form::input('url', 'url', null, ['class' => 'form-control', 'aria-describedby' => 'url']) !!}
    </div>
</div>

<div class='col-md-6 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="icon">Icon</span>
        {!! Form::input('text', 'icon', null, ['class' => 'form-control', 'aria-describedby' => 'icon']) !!}
    </div>
    <div class="input-group margin-top">
        <p>
            Use this model, replace YOUR_ICON by second field "fa" from desired icon from this <a href='https://fontawesome.com/v4.7.0/icons/'>website</a>
        </p>
        <p>
            &lt;span class="fa-stack fa-lg"&gt;&lt;i class="fa fa-circle fa-stack-2x"&gt;&lt;/i&gt;&lt;i class="fa YOUR_ICON fa-stack-1x fa-inverse"&gt;&lt;/i&gt;&lt;/span&gt;
        </p>
    </div>
</div>

<div class='col-md-6 margin-top'>
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