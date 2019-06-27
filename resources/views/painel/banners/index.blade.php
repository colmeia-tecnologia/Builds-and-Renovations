@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Banners</h1>
    </div>

    @can('create-banners')
        <div class='col-md-12 text-center'>
            <a href='{{route('banners.create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th width="150px">Image</th>
                <th width="50px">Pos.</th>
                <th width="100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($banners as $banner)
            <tr>
                <td>
                    @can('delete-banners')
                        {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-banners')
                        <a href='banners/{{$banner->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$banner->id}}</td>
                <td>{{$banner->title}}</td>
                <td>
                    <img src='{{$banner->image}}' class='img-responsive'>
                </td>
                <td class='text-center'>{{$banner->order}}</td>
                <td>
                    @php
                        $checked = '';

                        if($banner->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Banner" data-id="{{$banner->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='6' class='text-center'>
                    No Banner
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$banners->render()}}
    </div>
@endsection
