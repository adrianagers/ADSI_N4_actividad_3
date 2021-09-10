@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('teachers.update', $teacher->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th> <input type="text" class="form-control" name="name" value="{{$teacher->name}}"></th>
                                </tr>
                                <tr>
                                    <th>Apellido </th>
                                    <th> <input type="text" class="form-control" name="lastname" value="{{$teacher->lastname}}"></th>
                                </tr>
                                <tr>
                                    <th>correo</th>
                                    <th> <input type="text" class="form-control" name="email" value="{{$teacher->email}}"></th>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <th> <input type="text" class="form-control" name="phone" value="{{$teacher->phone}}"></th>
                                </tr>
                                <tr>
                                    <th>Jornada</th>
                                    <th><input type="text" class="form-control" name="work_days_id" value="{{$teacher->work_days_id}}"></th>
                                </tr>
                                <tr>
                                    <th>ficha</th>
                                    <th><input type="text" class="form-control" name="files_id" value="{{$teacher->files_id}}"></th>
                                </tr>
                                                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">Guardar cambios</button>
                        <a href="{{route('teachers.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
