<div class='col-md-4'>
    <a data-toggle="modal" href="/upload" data-target="#uploadModal">
        @if(!isset($banner))
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
                src='{{$banner->image}}' 
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
        <span class="input-group-addon" id="name">Nome</span>
        {!! Form::input('text', 'name', null, ['class' => 'form-control', 'aria-describedby' => 'name']) !!}
    </div>
</div>

<div class='col-md-4 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="color">Cor de Fundo</span>
        {!! Form::input('color', 'color', null, ['class' => 'form-control', 'aria-describedby' => 'color']) !!}
    </div>
</div>

<div class='col-md-4 margin-top'>
    <div class="input-group">
        <span class="input-group-addon" id="active">Ativo</span>
        {!! Form::select('active', ['1' => 'Ativo', '0' => 'Inativo'], null, ['class' => 'form-control', 'aria-describedby' => 'active']) !!}
    </div>
</div>

<div class='col-md-12 text-center margin-top'>
    {!! Form::button('<i class="fa fa-check" aria-hidden="true"></i> Salvar&nbsp;', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

@section('scripts')
    {!! Html::script('/js/painel/upload.min.js') !!}
@endsection