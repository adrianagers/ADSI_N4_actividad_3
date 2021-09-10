@extends('layouts.navbar');

@section('contenido')

<div class="container p-4">
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('students.index')}}" method="get">
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

<h1 class="text-danger text-center">Listado Aprendices</h1>

    <div class="container">
    <a href="{{route('students.create')}}"class="btn btn-sm btn-info m-4">Crear nueva ficha</a>

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
                                <th>PROFESOR</th>
                                <th>ACCIONES</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if(count($students)<=0)
                                <tr>
                                    <td colspan="9" class="alert alert-primary" >No se encontraron coincidencias</td>
                                </tr> 
                            @else
                            @foreach($students as $student)
                                    <tr>
                                        <td> {{ $student->id}} </td>
                                        <td> {{ $student->name}} </td>
                                        <td> {{ $student->lastname}} </td>
                                        <td> {{ $student->email}} </td>
                                        <td> {{ $student->phone}} </td>
                                        <td> {{ $student->work_days_id}} </td>
                                        <td> {{ $student->files_id}} </td>
                                        <td> {{ $student->teachers_id}} </td>
                                        <td>
                                        <form action="{{route('students.destroy',$student->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('students.show',$student->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                                <a href="{{route('students.edit',$student->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                                <button class="btn btn-sm btn-danger">Eliminar</button>                       
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$students->links()}}
                </div>
            </div>
        </div>
    </div>
    
@endsection