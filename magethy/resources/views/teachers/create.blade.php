@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('teachers.store')}}" method="post">
                @csrf    
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th> <input type="text" class="form-control" name="name" value=""></th>
                                </tr>
                                <tr>
                                    <th>Apellido</th>
                                    <th> <input type="text" class="form-control" name="lastname" value=""></th>
                                </tr>
                                <tr>
                                    <th>correo</th>
                                    <th> <input type="email" class="form-control" name="email" value=""></th>
                                </tr>
                                <tr>
                                    <th>phone</th>
                                    <th> <input type="number" class="form-control" name="phone" value=""></th>
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
                                        <option value="3">Fin semana</option>
                                        </select>
                                    </div>
                                    </th>
                                    
                                </tr>
                                <tr>
                                <!-- <th>Jornada</th>
                                    <th><input type="text" class="form-control" name="work_days_id" value=""></th> -->
                                    <th>             
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Ficha</label>
                                        <select class="form-control" name= "files_id" id="exampleFormControlSelect1" >
                                        <option selected>Seleccionar ficha..</option>
                                        <option value="1">2024371</option>
                                        <option value="2">345678</option>
                                        <option value="3">12345678</option>
                                        </select>
                                    </div>
                                    </th>
                                    
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">crear Registro </button>
                        <a href="{{route('teachers.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
