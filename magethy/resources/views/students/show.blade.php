@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-10">
            <div class="card p-4">
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <h1 class="text-danger text-center">Detalles del estudiante</h1>
                                <tr>
                                    <th>Nombre</th>
                                    <th>{{$student->name}}</th>
                                </tr>
                                <tr>
                                    <th>Apellido</th>
                                    <th>{{$student->lastname}}</th>
                                </tr>
                                <tr>
                                    <th>Correo</th>
                                    <th>{{$student->email}}</th>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <th>{{$student->phone}}</th>
                                </tr>
                                <tr>
                                    <th>Jornada</th>
                                    <th>{{$student->work_days_id}}</th>
                                </tr>
                                <tr>
                                    <th>Ficha</th>
                                    <th>{{$student->files_id}}</th>
                                </tr>
                                <tr>
                                    <th>Profesores</th>
                                    <th>{{$student->teachers_id}}</th>
                                </tr>
                                
                            </thead>
                        </table>
                        <a href="{{route('students.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                        <a href="{{route('students.edit',$student->id)}}" class="btn btn-warning btn-sm">Editar producto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
