@extends('layouts.navbar');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('students.store')}}" method="post">
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
                                    <th> <input type="text" class="form-control" name="email" value=""></th>
                                </tr>
                                <tr>
                                    <th>phone</th>
                                    <th> <input type="text" class="form-control" name="phone" value=""></th>
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
                                        <option value="3">123456</option>
                                        </select>
                                    </div>
                                    </th>
                                    
                                </tr>
                                    <th>             
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Profesor</label>
                                        <select class="form-control" name= "teachers_id" id="exampleFormControlSelect1" >
                                        <option selected>Seleccionar profesor..</option>
                                        <option value="1">Robinson</option>
                                        <option value="2">Maria LuzCamacho </option>
                                        <option value="3">Heiver</option>
                                        </select>
                                    </div>
                                    </th>
                                    
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">crear Registro </button>
                        <a href="{{route('students.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
