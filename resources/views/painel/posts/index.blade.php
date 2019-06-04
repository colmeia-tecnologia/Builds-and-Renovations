@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Posts</h1>
    </div>

    @can('create-posts')
        <div class='col-md-12 text-center'>
            <a href='{{url('/posts/create')}}' alt='New' title='New' class='btn btn-default'>
                New
            </a>
            <br/>
            <br/>
        </div>
    @endcan

    <table class="table table-responsive table-striped table-bordered table-hovered">
        <thead>
            <tr>
                <th width="100px">Ações</th>
                <th width="100px">ID</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th width="150px">Imagem</th>
                <th width="100px">Ativo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
            <tr>
                <td>
                    @can('delete-posts')
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-posts')
                        <a href='posts/{{$post->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan

                    
                    <div id="fb-root"></div>
                    @php
                        $friendlyTitle = \App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
                        $friendlyTitle = urlencode($friendlyTitle);
                        $url = env('BLOG_URL');
                        $url = str_replace('_ID_', $post->id, $url);
                        $url = str_replace('_TITLE_', $friendlyTitle, $url);
                    @endphp
                    <a class="fb-xfbml-parse-ignore btn btn-info margin-top-p" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url}}%2F&amp;src=sdkpreparse" alt='Compatilhar no Facebook'>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </td>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <img src='{{$post->image}}' class='img-responsive'>
                </td>
                <td>
                    @php
                        $checked = '';

                        if($post->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Post" data-id="{{$post->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='6' class='text-center'>
                    Nenhum Post cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$posts->render()}}
    </div>
@endsection

@section('scripts')
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1424205961136633";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@endsection
