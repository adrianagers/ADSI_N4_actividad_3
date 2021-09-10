@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('students.update', $student->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th> <input type="text" class="form-control" name="name" value="{{$student->name}}"></th>
                                </tr>
                                <tr>
                                    <th>Apellido </th>
                                    <th> <input type="text" class="form-control" name="lastname" value="{{$student->lastname}}"></th>
                                </tr>
                                <tr>
                                    <th>correo</th>
                                    <th> <input type="text" class="form-control" name="email" value="{{$student->email}}"></th>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <th> <input type="text" class="form-control" name="phone" value="{{$student->phone}}"></th>
                                </tr>
                                <tr>
                                    <th>Jornada</th>
                                    <th><input type="text" class="form-control" name="work_days_id" value="{{$student->work_days_id}}"></th>
                                </tr>
                                <tr>
                                    <th>ficha</th>
                                    <th><input type="text" class="form-control" name="files_id" value="{{$student->files_id}}"></th>
                                </tr>
                                <tr>
                                    <th>profesores</th>
                                    <th><input type="text" class="form-control" name="teachers_id" value="{{$student->teachers_id}}"></th>
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">Guardar cambios</button>
                        <a href="{{route('students.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
