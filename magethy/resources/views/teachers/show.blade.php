@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                            <h1 class="text-danger text-center">Detalles del Instructor</h1>

                                <tr>
                                    <th>Nombre</th>
                                    <th>{{$teacher->name}}</th>
                                </tr>
                                <tr>
                                    <th>Apellido</th>
                                    <th>{{$teacher->lastname}}</th>
                                </tr>
                                <tr>
                                    <th>Correo</th>
                                    <th>{{$teacher->email}}</th>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <th>{{$teacher->phone}}</th>
                                </tr>
                                <tr>
                                    <th>Jornada</th>
                                    <th>{{$teacher->work_days_id}}</th>
                                </tr>
                                <tr>
                                    <th>Ficha</th>
                                    <th>{{$teacher->files_id}}</th>
                                </tr>
                                                               
                            </thead>
                        </table>
                        <a href="{{route('teachers.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                        <a href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-warning btn-sm">Editar producto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
