@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('files.update', $file->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th> <input type="text" class="form-control" name="name" value="{{$file->name}}"></th>
                                </tr>
                                <tr>
                                    <th>Jornada</th>
                                    <th><input type="text" class="form-control" name="work_days_id" value="{{$file->work_days_id}}"></th>
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">Guardar cambios</button>
                        <a href="{{route('files.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
