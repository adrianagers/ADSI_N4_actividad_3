@extends('layouts.navbar');

@section('contenido')
    <div class="container">
    <a href="{{route('files.create')}}"class="btn btn-sm btn-info m-4">Crear nueva ficha</a>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>JORNADA</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                                    <tr>
                                        <td> {{ $file->id}} </td>
                                        <td> {{ $file->name}} </td>
                                        <td> {{ $file->work_days_id}} </td>
                                        <td>
                                        <form action="{{route('files.destroy',$file->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('files.show',$file->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                                <a href="{{route('files.edit',$file->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                                <button class="btn btn-sm btn-danger">Eliminar</button>                       
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection