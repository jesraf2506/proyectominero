@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de administración</h1>

    <table id="myTable"class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Horometro</th>
            <th scope="col">fl x+1</th>
            <th scope="col">bl x+1</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($equipos as $equipo)
                
            
          <tr>
          <th scope="row">{{$equipo->id}}</th>
            <td>{{$equipo->brand}}</td>
            <td>{{$equipo->model}}</td>
            <td>{{$equipo->horometer}}</td>
            <td>{{$equipo->fl}}</td>
            <td>{{$equipo->bl}}</td>
            
              @switch($equipo->state_id)
                      @case(1)
                          <td>
                              <a class="btn btn-sm btn-primary text-white"> Activo </a>
                          </td>  
                          @break
                      @case(2)
                          <td>
                            <a class="btn btn-sm btn-info text-white"> En proceso </a>
                          </td>
                          @break
                      @case(3)
                          <td>
                            <a class="btn btn-sm btn-danger text-white"> No reparado </a>
                          </td>
                          @break
                      @case(4)
                          <td>
                            <a class="btn btn-sm btn-success text-white"> Reparado </a>
                          </td>
                          @break
              @endswitch
              {{--$equipo->state_id--}}
            
            
            
            
            <td>
            <a href="{{route('equipo.show',$equipo->id)}}" class="btn btn-sm btn-default"><i class="fa fa-eye" aria-hidden="true"></i> </a>
            <a href="{{route('equipo.edit',$equipo->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Editar </a>
               <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a>
            </td>
          </tr>
          
          



         

          @endforeach
          
          
        </tbody>
      </table>
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