@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>E-books</h1>
    </div>

    @can('create-ebooks')
        <div class='col-md-12 text-center'>
            <a href='{{route('ebooks.create')}}' alt='New' title='New' class='btn btn-default'>
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
                <th width="150px">Image</th>
                <th width="100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ebooks as $ebook)
            <tr>
                <td>
                    @can('delete-ebooks')
                        {!! Form::open(['route' => ['ebooks.destroy', $ebook->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                            {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                    @can('update-ebooks')
                        <a href='ebooks/{{$ebook->id}}/edit' class='btn btn-info'>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan
                </td>
                <td>{{$ebook->id}}</td>
                <td>{{$ebook->title}}</td>
                <td><img src='{{$ebook->image}}' class='img-responsive'></td>
                <td>
                    @php
                        $checked = '';

                        if($ebook->active == true)
                            $checked = 'checked';
                    @endphp

                    <input type="checkbox" {{$checked}} class='checkboxActive' data-model="Ebook" data-id="{{$ebook->id}}" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" >
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='5' class='text-center'>
                    Nenhum e-book cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$ebooks->render()}}
    </div>
@endsection
