@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Emails</h1>
    </div>

    @can('create-emails')
        <div class='col-md-12 text-center'>
            <a href='{{route('emails.create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th>Email</th>
                <th width="100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($emails as $email)
            <tr>
                <td>
                    @can('delete-emails')
                        {!! Form::open(['route' => ['emails.destroy', $email->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-emails')
                        <a href='emails/{{$email->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$email->id}}</td>
                <td>{{$email->name}}</td>
                <td>{{$email->email}}</td>
                <td>
                    @php
                        $checked = '';

                        if($email->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Email" data-id="{{$email->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='5' class='text-center'>
                    No Email
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$emails->render()}}
    </div>
@endsection
