@foreach ($files as $file)
    <div class='col-md-3 margin-top'>
        <div class='upload-image'>
            <img src='{{asset($file)}}' class='img-responsive'>
        </div>
        <div class='col-md-12 text-center margin-top-p'>
            @if(Route::current()->uri != 'upload/many')
                {{str_replace('img/', '', $file)}}<br/>
                <a class='btn btn-default uploadSelectImage' data-name='{{asset($file)}}'>
                    Selecionar
                </a>
            @else
                <label class='margin-top'>
                    {{str_replace('img/', '', $file)}}<br/>
                    {!! Form::checkbox('images', $file) !!}
                </label>
            @endif
        </div>
        
        <div class='col-md-12 text-center margin-top-p'>
            <a href='/upload/delete/{{str_replace('/','__',$file)}}' class='btn btn-default' id='deleteImage' data-name='{{$file}}'>
                Apagar
            </a>
        </div>
    </div>
@endforeach