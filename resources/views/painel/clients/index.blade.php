@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Clients</h1>
    </div>

    @can('create-clients')
        <div class='col-md-12 text-center'>
            <a href='{{route('clients.create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clients as $client)
            <tr>
                <td>
                    @can('delete-clients')
                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-clients')
                        <a href='clients/{{$client->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
            </tr>
            @empty
            <tr>
                <td colspan='3' class='text-center'>
                    No Client
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$clients->render()}}
    </div>
@endsection
