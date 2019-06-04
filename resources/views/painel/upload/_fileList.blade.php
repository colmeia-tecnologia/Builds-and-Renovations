@foreach ($files as $file)
    <div class='col-md-3 margin-top'>
        <div class='upload-image'>
            <img src='{{asset($file)}}' class='img-responsive'>
        </div>

        <div class='col-md-12 margin-top'>
            {{str_replace('img/', '', $file)}}
        </div>
        
        <div class='col-md-12 text-center margin-top-p'>
            <a class='btn btn-default uploadSelectImage' data-name='{{asset($file)}}'>
                Select
            </a>
        </div>
        
        <div class='col-md-12 text-center margin-top-p'>
            <a href='/upload/delete/{{str_replace('/','__',$file)}}' class='btn btn-default' id='deleteImage' data-name='{{$file}}'>
                Delete
            </a>
        </div>
    </div>
@endforeach