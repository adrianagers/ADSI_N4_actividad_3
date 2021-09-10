@extends('layouts.navbar');

@section('contenido')
<div class="container p-4">
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('teachers.index')}}" method="get">
            @csrf
                <div class="form-row">
                    <div class="col-xl-8">
                        <input type="text" class="form-control" name="texto" value={{$texto}}>
                    </div>
                   <div class="col-auto">
                       <input type="submit" class="btn btn-primary" value="buscar">
                   </div> 
                </div>
            </form>
        </div>
    </div>
</div>

<h1 class="text-danger text-center">Listado del Instructor</h1>

   <div class="container">
    <a href="{{route('teachers.create')}}"class="btn btn-sm btn-info m-4">Crear nueva ficha</a>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CORREO</th>
                                <th>TELEFONO</th>
                                <th>JORNADA</th>
                                <th>FICHA</th>
                                <th>ACCIONES</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if(count($teachers)<=0)
                                <tr>
                                    <td colspan="8" class="alert alert-primary" >No se encontraron coincidencias</td>
                                </tr> 
                            @else
                            @foreach($teachers as $teacher)
                                    <tr>
                                        <td> {{ $teacher->id}} </td>
                                        <td> {{ $teacher->name}} </td>
                                        <td> {{ $teacher->lastname}} </td>
                                        <td> {{ $teacher->email}} </td>
                                        <td> {{ $teacher->phone}} </td>
                                        <td> {{ $teacher->work_days_id}} </td>
                                        <td> {{ $teacher->files_id}} </td>
                                        <td>
                                        <form action="{{route('teachers.destroy',$teacher->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('teachers.show',$teacher->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                                <a href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                                <button class="btn btn-sm btn-danger">Eliminar</button>                       
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$teachers->links()}}
                </div>
            </div>
        </div>
    </div>
    
@endsection