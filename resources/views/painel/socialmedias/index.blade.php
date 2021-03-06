@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Social Media</h1>
    </div>

    @can('create-socialmedias')
        <div class='col-md-12 text-center'>
            <a href='{{route('socialmedias.create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th>URL</th>
                <th width="50px">Icon</th>
                <th width="100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($socialmedias as $socialmedia)
            <tr>
                <td>
                    @can('delete-socialmedias')
                        {!! Form::open(['route' => ['socialmedias.destroy', $socialmedia->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-socialmedias')
                        <a href='socialmedias/{{$socialmedia->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$socialmedia->id}}</td>
                <td>{{$socialmedia->name}}</td>
                <td>
                    @if(isset($socialmedia->url))
                        <a href='{{$socialmedia->url}}' target='_blank'>
                            {{$socialmedia->url}}
                        </a>
                    @endif
                </td>
                <td><img src='{{$socialmedia->icon}}' class='img-responsive'></td>
                <td>
                    @php
                        $checked = '';

                        if($socialmedia->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="SocialMedia" data-id="{{$socialmedia->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='6' class='text-center'>
                    No Social Media
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$socialmedias->render()}}
    </div>
@endsection
