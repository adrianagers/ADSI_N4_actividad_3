@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>{{$file->name}}</th>
                                </tr>
                                <tr>
                                    <th>Jornada</th>
                                    <th>{{$file->work_days_id}}</th>
                                </tr>
                                
                            </thead>
                        </table>
                        <a href="{{route('files.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                        <a href="{{route('files.edit',$file->id)}}" class="btn btn-warning btn-sm">Editar producto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
