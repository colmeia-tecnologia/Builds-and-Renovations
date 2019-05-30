@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Serviços Específicos</h1>
    </div>

    @can('create-subservices')
        <div class='col-md-12 text-center'>
            <a href='{{route('subservices.create')}}' alt='Cadastrar' title='Cadastrar' class='btn btn-default'>
                Cadastrar
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
                <th>Serviço</th>
                <th>Serviço específico</th>
                <th width="100px">Ativo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subservices as $subservice)
            <tr>
                <td>
                    @can('delete-subservices')
                        {!! Form::open(['route' => ['subservices.destroy', $subservice->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-subservices')
                        <a href='subservices/{{$subservice->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$subservice->id}}</td>
                <td>{{$subservice->service->name}}</td>
                <td>{{$subservice->name}}</td>
                <td>
                    @php
                        $checked = '';

                        if($subservice->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Subservice" data-id="{{$subservice->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Ativo" data-off="Inativo" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='6' class='text-center'>
                    Nenhum Serviço cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$subservices->render()}}
    </div>
@endsection
