@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Portifólios</h1>
    </div>

    @can('create-portfolios')
        <div class='col-md-12 text-center'>
            <a href='{{url('/portfolios/create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th>Title</th>
                <th>Video</th>
                <th width="100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($portfolios as $portfolio)
            <tr>
                <td>
                    @can('delete-portfolios')
                        {!! Form::open(['route' => ['portfolios.destroy', $portfolio->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-portfolios')
                        <a href='portfolios/{{$portfolio->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$portfolio->id}}</td>
                <td>{{$portfolio->title}}</td>
                <td>
                    <a href='{{$portfolio->url}}' target='_blank'>{{$portfolio->url}}</a>
                </td>
                <td>
                    @php
                        $checked = '';

                        if($portfolio->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Portfolio" data-id="{{$portfolio->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='6' class='text-center'>
                    Nenhum Portifólio cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$portfolios->render()}}
    </div>
@endsection
