@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Equipo</h1><br>

    <div class="card">
      
      <div class="card-header">
        Datos del Equipo con ID: <strong>{{ $equipo->id }}</strong>
      </div>
      <div class="card-body">
        <div class="row">
        <div class="col">

          <p class="card-text">Parámetros Básicos</p>

      <h5 class="card-title"><strong>Marca:</strong> {{$equipo->brand}}</h5><br>
      <h5 class="card-title"><strong>Modelo:</strong> {{$equipo->model}}</h5><br>
      <h5 class="card-title"><strong>Horómetro:</strong> {{$equipo->horometer}}</h5><br>
      
    </div>
    <div class="col">
      <p class="card-text">Parámetros de Mantenimiento</p>

      <h5 class="card-title"><strong>fl x + 1:</strong> {{$equipo->fl}}</h5><br>
      <h5 class="card-title"><strong>bl x + 1:</strong> {{$equipo->bl}}</h5><br>
      
      @switch($equipo->state_id)
          @case(1)
              
              <h5 class="card-title"><strong>Estado:</strong> 
                <a class="btn btn-sm btn-primary text-white"> Activo </a>
              </h5><br>
              @break
          @case(2)
          <h5 class="card-title"><strong>Estado:</strong> 
          <a class="btn btn-sm btn-info text-white"> En proceso</a>
          </h5><br>
              @break
          @case(3)
          <h5 class="card-title"><strong>Estado:</strong> 
            <a class="btn btn-sm btn-danger text-white">No reparado</a>
          </h5><br>
              @break
          @case(4)
          <h5 class="card-title"><strong>Estado:</strong> 
            <a class="btn btn-sm btn-success text-white">Reparado</a>
          </h5><br>
              @break

      @endswitch
      <br>
          
      <h5 class="card-title"><strong>Creado por:</strong> {{$usuario}}</h5><br>


      <small class="text-muted">Hace:{{$equipo->created_at->diffForHumans()}}</small>

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
    <p>Creado por &copy www.jesrafor.com Todos los Derechos reservados</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    

    <script> $('#myTable').DataTable(); </script>
        

@stop