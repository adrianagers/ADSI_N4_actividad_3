@extends('layouts.navbar');

@section('contenido')

<div class="container p-4">
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('files.index')}}" method="get">
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


<h1 class="text-danger text-center">Listado Fichas</h1>

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
                            @if(count($files)<=0)
                                <tr>
                                    <td colspan="4" class="alert alert-primary" >No se encontraron coincidencias</td>
                                </tr> 
                            @else
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
                            @endif
                        </tbody>
                    </table>
                    {{$files->links()}}
                </div>
            </div>
        </div>
    </div>
    
@endsection