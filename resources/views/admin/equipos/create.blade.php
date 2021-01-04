@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de administración</h1>

    <div class="card">
      
        <div class="card-header">
          Datos del Equipo con ID: <strong>{{ $equipo->id }}</strong>
        </div>
        <div class="card-body">
          <div class="row">
          <div class="col">
  
            <p class="card-text">Parámetros Básicos</p>
  
       
        
      </div>
      <div class="col">
        <p class="card-text">Parámetros de Mantenimiento</p>
  
        
  
      </div>
  
    </div>
        </div>
  
        
  
        <div class="card-footer">
          
          <a href="{{route('equipo.edit',$equipo->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Editar </a>
          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a>
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