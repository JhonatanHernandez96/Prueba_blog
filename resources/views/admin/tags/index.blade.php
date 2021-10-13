@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')

    <a href="{{route('admin.tags.create')}}" class="btn btn-secondary btn-sm float-right ">Nueva Etiqueta</a>


    <h1>Listado de Etiquetas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @if (session('info_delete'))
        <div class="alert alert-danger">
            <strong>{{session('info_delete')}}</strong>
        </div>
    @endif
<div class="card">
    {{-- <div class="card-header">
        <a href="{{route('admin.tags.create')}}" class="btn btn-secondary ">Agregar Etiqueta</a>
    </div> --}}

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                        </td>


                        <td width="10px">
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

