<?php

namespace App\Http\Controllers\Admin;
use App\Equipo;
use App\User;
Use App\State;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();

        return view('admin.equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'crear';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //dd($equipo->id);
        //$usuario.user($equipo->id);
        //$usuarios= User::all();
        //$equipos = Equipo::all();

        /*
        foreach($usuarios as $usuario){

            echo $usuario->name . "<br>";
            echo $usuario->email . "<br>";
            //echo $usuario->equipos->mark . "<br>";

        }
        

        foreach($equipos as $equipo){

            echo $equipo->brand . "<br>";
            echo $equipo->model . "<br>";
            echo $equipo->horometer ."<br>";
            //echo $equipo->user->name . "<br>";

        }
        
        echo '<pre>';
            var_dump($usuarios);
        echo '</pre>';
         echo '<pre>';
            var_dump($estados);
        echo '</pre>';
        
        //dd($usuario);
        //die();
        echo '<pre>';
            var_dump($estados);
        echo '</pre>';
        */
        
        
        $usuario=$equipo->user->name;
       return view('admin.equipos.show',compact('equipo','usuario'));
        

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        $estados= State::all();
        return view('admin.equipos.edit', compact('equipo','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'horometer' => 'required',
            'fl' => 'required',
            'bl' => 'required',
            'state' => 'required',
         ]);

        $equipo->brand = $request->brand;
        $equipo->model = $request->model;
        $equipo->horometer = $request->horometer;
        $equipo->fl = $request->fl;
        $equipo->bl = $request->bl;
        
        switch($request->state){
          case 'Activo':
              
            $equipo->state_id = 1;
            break;
    
          case 'En Proceso':
            $equipo->state_id = 2;
            break;

          case 'No reparado':
            $equipo->state_id = 3;
            break;

          case 'Reparado':

            $equipo->state_id = 4;
            break;

            }
            $equipo->updated_at = $request->updated_at;
            //echo $equipo->state_id;
            //die();
        $equipo->save();
        return redirect()->route('equipo.show', $equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
