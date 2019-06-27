<div class='col-md-6'>
    <div class="input-group">
        <span class="input-group-addon" id="name">Nome</span>
        {!! Form::input('text', 'title', null, ['class' => 'form-control', 'aria-describedby' => 'name']) !!}
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
        <span class="input-group-addon" id="active">Active</span>
        {!! Form::select('active', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control', 'aria-describedby' => 'active']) !!}
    </div>
</div>

<div class='col-md-12 margin-top'>
    <label for='text'>Texto</label>
    <textarea name="text" id='text'class='tinymce'>{!! $portfolio->text or ''!!}</textarea>
    <a data-toggle="modal" href="/upload/tinymce" data-target="#uploadModalTinyMce" id="tinyMceImageModalLink"></a>

    <input type='hidden' id='imageInput' name='imageInput'>
    <div class="modal fade" id="uploadModalTinyMce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div>
        </div>
    </div>
</div>

<div class='col-md-12 text-center margin-top'>
    <a data-toggle="modal" href="/upload/many" data-target="#uploadModal" class='btn btn-default'>
        Imagens
    </a>

    @include('painel.upload.modal')
</div>

<div class='container'>
    <div class='row' id='imagesList'>
        @if(isset($portfolio) && count($portfolio->images) > 0)
            @include('painel.upload.manyImages', ['images' => $portfolio->images])
        @endif
    </div>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Save&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

@section('scripts')
    {!! Html::script('/js/painel/tinymce/tinymce.min.js') !!}
    {!! Html::script('/js/painel/upload.min.js') !!}

    <script>
        $('#uploadModalTinyMce')
            .on('hide.bs.modal', function (e) {
                var input = $('#imageInput').val();
                $('#'+input).val('');

                var name = $('#selectedImage').val();

                if(name != '')
                    name = name.split('://painel.').join('://');

                $('#'+input).val(name);
            });
    </script>
@endsection