<div class='col-md-4'>
    <a data-toggle="modal" href="/upload" data-target="#uploadModal">
        @if(!isset($landingPage))
            <img 
                src='{{ asset('img/template/painel/sem-imagem.jpg') }}' 
                alt='Clique para selecionar a imagem' 
                title='Clique para selecionar a imagem' 
                class='img-responsive'
                id='image-uploaded'
            >
            {!! Form::input('hidden', 'image', null, ['id' => 'image']) !!}
        @else
            <img 
                src='{{$landingPage->image}}' 
                alt='Clique para selecionar a imagem' 
                title='Clique para selecionar a imagem' 
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
        <span class="input-group-addon" id="title">Título</span>
        {!! Form::input('text', 'title', null, ['class' => 'form-control', 'aria-describedby' => 'title']) !!}
    </div>
</div>

<div class='col-md-8 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="description">Descrição</span>
        {!! Form::input('text', 'description', null, ['class' => 'form-control', 'aria-describedby' => 'description']) !!}
    </div>
</div>

<div class='col-md-8 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="form_title">Título do Formulário</span>
        {!! Form::input('text', 'form_title', null, ['class' => 'form-control', 'aria-describedby' => 'form_title']) !!}
    </div>
</div>

<div class='col-md-8 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="form">Formulário Mautic</span>
        {!! Form::input('text', 'form', null, ['class' => 'form-control', 'aria-describedby' => 'form']) !!}
    </div>
    <div class="input-group margin-top">
        <p>
            Gerar o formulário pelo Mautic (Componentes &gt; Formulário). Depois inclua o Javascript do Formulário
        </p>
    </div>
</div>

<div class='col-md-12 margin-top'>
    <label for='text'>Texto</label>
    <textarea name="text" id='text'class='tinymce'>{{$landingPage->text or ''}}</textarea>
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
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Salvar&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
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