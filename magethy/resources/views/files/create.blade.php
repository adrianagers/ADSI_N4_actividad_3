@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('files.store')}}" method="post">
                @csrf    
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th> <input type="text" class="form-control" name="name" value=""></th>
                                </tr>
                                <tr>
                                <!-- <th>Jornada</th>
                                    <th><input type="text" class="form-control" name="work_days_id" value=""></th> -->
                                    <th>             
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jornada</label>
                                        <select class="form-control" name= "work_days_id" id="exampleFormControlSelect1" >
                                        <option selected>Seleccionar tipo Jornada..</option>
                                        <option value="1">Diurna</option>
                                        <option value="2">Nocturna</option>
                                        <option value="3">Fin seman</option>
                                        </select>
                                    </div>
                                    </th>
                                    
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">crear Registro </button>
                        <a href="{{route('files.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
