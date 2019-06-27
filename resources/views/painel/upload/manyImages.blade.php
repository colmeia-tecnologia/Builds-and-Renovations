<div class='margin-top'>
    <div class='col-md-3 text-center'>
        Imagem
    </div>

    <div class='col-md-3 text-center'>
        Título
    </div>

    <div class='col-md-3 text-center'>
        Descrição
    </div>

    <div class='col-md-2 text-center'>
        Ordem
    </div>

    <div class='col-md-1 text-center'>
        Apagar
    </div>
</div>

@for($i=0; $i<count($images); $i++)
    @php
        if(($images[$i] instanceof \App\Models\PortfolioImage))
            $image = $images[$i]['image'];
        else
            $image = env('APP_URL').'/'.$images[$i];
    @endphp

    <div class='row margin-top' id='img{{$i}}'>
        <div class='col-md-3'>
            <img src='{{$image}}' class='img-responsive'>
            {{ Form::hidden("images[{$i}][image]", $image) }}
        </div>

        <div class='col-md-3'>
            <div class='row'>
                <div class='col-md-11 col-md-ofset-1 input-group'>
                    {{ Form::input('text', "images[{$i}][title]", null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class='col-md-3'>
            <div class='row'>
                <div class='col-md-11 col-md-ofset-1 input-group'>
                    {{ Form::input('text', "images[{$i}][description]", null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>

        <div class='col-md-2'>
            <div class='row'>
                <div class='col-md-11 col-md-ofset-1 input-group'>
                    {{ Form::number("images[{$i}][order]", $i+1, ['class' => 'form-control', 'min' => '1']) }}
                </div>
            </div>
        </div>

        <div class='col-md-1'>
            <a href='#' class="deleteImage btn btn-danger" data-img='{{$i}}'>
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </div>
    </div>
@endfor

<script>
    $('.deleteImage').click(function(){
        $('#img'+$(this).attr('data-img')).html('');
    });
</script> 