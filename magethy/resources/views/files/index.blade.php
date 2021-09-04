@extends('layouts.navbar')

@section('contenido')

<h2 class="text-center p-4">listado de Fichas</h2>
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>ID_JORNADA</th>
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
                        <a href=""class="btn btn-sm btn-info">Detalles</a>
                        <a href="" class="btn btn-sm btn-warning">Editar</a>
                        <a href=""class="btn btn-sm btn-danger">Eliminar</a>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection