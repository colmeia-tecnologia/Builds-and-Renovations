@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Landing Pages</h1>
    </div>

    @can('create-landing_pages')
        <div class='col-md-12 text-center'>
            <a href='{{route('landing_pages.create')}}' alt='New' title='New' class='btn btn-default'>
                New
            </a>
            <br/>
            <br/>
        </div>
    @endcan

    <table class="table table-responsive table-striped table-bordered table-hovered">
        <thead>
            <tr>
                <th width="100px">Actions</th>
                <th width="100px">ID</th>
                <th>Titulo</th>
                <th width="100px">Imagem</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($landingPages as $landingPage)
            <tr>
                <td>
                    @can('delete-landing_pages')
                        {!! Form::open(['route' => ['landing_pages.destroy', $landingPage->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-landing_pages')
                        <a href='landing_pages/{{$landingPage->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$landingPage->id}}</td>
                <td>{{$landingPage->title}}<br/>{{\App\Http\Controllers\Util\UrlController::friendlyUrl($landingPage->title)}}</td>
                <td><img src='{{$landingPage->image}}' class='img-responsive'></td>
            </tr>
            @empty
            <tr>
                <td colspan='4' class='text-center'>
                    Nenhuma Landing Page cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$landingPages->render()}}
    </div>
@endsection
