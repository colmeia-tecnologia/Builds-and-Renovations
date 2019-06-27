<div class="modal-header">
    <h1>Upload</h1>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="fa fa-times-circle" aria-hidden="true"></i>
    </button>

    <div class='col-md-12'>
        @include('painel.upload._form')
    </div>
</div>

<div class="modal-body">
    <div class='row'>
        <div class='col-md-12 text-center'>
            <h1>Images</h1>
        </div>

        {!! Form::input('hidden', 'image', null, ['id' => 'selectedImage']) !!}

        @if(Route::current()->uri == 'upload/many')
            <div class='col-md-12 text-center margin-top margin-bottom'>
                <a href='#' class='selectMany btn btn-default'>
                    Select Images
                </a>
            </div>
        @endif
        
        <div id='fileList'>
            @include('painel.upload._fileList')
        </div>

        @if(Route::current()->uri == 'upload/many')
            <div class='col-md-12 text-center margin-top-g margin-bottom'>
                <a href='#' class='selectMany btn btn-default'>
                    Select Images
                 </a>
             </div>
        @endif

        @if(Route::current()->uri =! 'upload/many')
            <div class='col-md-3 margin-top'>
                <div class='upload-image'>
                    <img src='{{asset('img/template/painel/sem-imagem.jpg')}}' class='img-responsive'>
                </div>

                <div class='col-md-12 text-center margin-top-p'>
                    <a class='btn btn-default uploadSelectImage' data-name='{{asset('img/template/painel/sem-imagem.jpg')}}'>
                        Select
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
    $('.uploadSelectImage').click(function(){
        var name = $(this).attr('data-name');
        
        $('#selectedImage').val(name);

        @if(Route::current()->uri == 'upload')
            $('#uploadModal').modal('hide');
        @elseif(Route::current()->uri == 'upload/tinymce')
            $('#uploadModalTinyMce').modal('hide');
        @endif
    });

    $('.selectMany').click(function (){
        var images = [];

        $('[name=images]:checked').each(function() {
            images.push($(this).val());
        });

        $.ajax
        ({
            type: "POST",
            url: "/upload/many/list",
            data: 
            {
                images: images
            },
            success: function(data)
            {
                $('#imagesList').html(data);
            },
            error: function(data)
            {   
                $('body').html(data.responseText);
            }
        });

        $('#uploadModal').modal('hide');
    });

    $('#deleteImage').click(function(){
        var name = $(this).attr('data-name');
        name = name.split('/').join('__');

        $.ajax
        ({
            type: "get",
            url: "/upload/delete/"+name,
            data: 
            {
                image: name,
            },
            success: function(data)
            {
                console.log(data);
            }
        });
    });
</script>