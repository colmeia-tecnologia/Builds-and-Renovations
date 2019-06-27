@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Telephones</h1>
    </div>

    @can('create-telephones')
        <div class='col-md-12 text-center'>
            <a href='{{route('telephones.create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th>Telephone</th>
                <th width="50px">Whatsapp</th>
                <th width="100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($telephones as $telephone)
            <tr>
                <td>
                    @can('delete-telephones')
                        {!! Form::open(['route' => ['telephones.destroy', $telephone->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-telephones')
                        <a href='telephones/{{$telephone->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$telephone->id}}</td>
                <td>{{$telephone->name}}</td>
                <td>{{$telephone->telephone}}</td>
                <td class='text-center'>
                    @if($telephone->whatsapp == true )
                        <i class="fa fa-whatsapp whatsappIcon fa-2x" aria-hidden="true"></i>
                    @endif
                </td>
                <td>
                    @php
                        $checked = '';

                        if($telephone->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Telephone" data-id="{{$telephone->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='6' class='text-center'>
                    No Telephone
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$telephones->render()}}
    </div>
@endsection
