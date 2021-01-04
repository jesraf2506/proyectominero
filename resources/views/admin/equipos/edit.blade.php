@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel para Editar</h1><br>

    <div class="card">
      
            <div class="card-header">
            Datos del Equipo con ID: <strong>{{ $equipo->id }}</strong>
            </div>
                <div class="card-body justify-content-center">
                    
                        
                    @if($errors->any())
                            <ul class="alert alert-info">
                            @foreach ($errors->all() as $error)
                            
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                            </ul>
                    @endif
                    
                
                
            
            <div class="row">

                     <div class="col">

                        <form method="post" action="{{route('equipo.update', $equipo)}}">
                            @csrf
                            @method('put')
                            <div class="row">
                            <div class="form-group col-6 ">
                            <label for="exampleInputEmail1">Marca del equipo</label>
                            <input type="text" name="brand"class="form-control" id="exampleInputEmail1" value="{{$equipo->brand}}" placeholder="Marca">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="exampleInputEmail1">Modelo del equipo</label>
                                <input type="text" name="model" class="form-control" id="exampleInputEmail1" value="{{$equipo->model}}" placeholder="Modelo">
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputEmail1">Horómetro</label>
                                <input type="number" name="horometer" class="form-control" id="exampleInputEmail1" value="{{$equipo->horometer}}" placeholder="Horometro">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="exampleInputEmail1">Fl x+1</label>
                                <input type="text" name="fl" class="form-control" id="exampleInputEmail1" value="{{$equipo->fl}}" placeholder="Fl x+1">
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputEmail1">Bl x+1</label>
                                <input type="text" name="bl" class="form-control" id="exampleInputEmail1" value="{{$equipo->bl}}" placeholder="Bl x+1">
                            </div>

                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Estado</label>
                                <select class="form-control" name="state" id="exampleFormControlSelect1">
                                    
                                    @foreach ($estados as $estado)
                                        
                                    <option>{{$estado->name}}</option>
                                    
                                    @endforeach
                                </select>
                              </div>
                        
                            
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                
                    </div>
  
                </div>
            </div>
  
        
  
    
  
      </div>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    

    <script> $('#myTable').DataTable(); </script>
        

@stop