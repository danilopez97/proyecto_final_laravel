<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recetas;
use DB;
class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recetas = recetas::all();
        return view('mostrarrecetas', ['recetas' =>$recetas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('receta');
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
         $descripcion_receta = $request->input('descripcion_receta') ;
      
          
      DB::insert('insert into receta (descripcion_receta) values(?) ',[$descripcion_receta]);
        return redirect('/mostrarrecetas')->with('info', 'Receta agregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $receta=recetas::where('idreceta',$id)->first();
        return view('edit_recetas',['receta'=>$receta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $this->Validate($request, [
            'descripcion_receta' => 'required'
            
            
          
        ]);
        $data = array(
            'descripcion_receta' => $request->input('descripcion_receta')
           
            
        );
        
        recetas::where('idreceta',$id)->update($data);      
        return redirect('/mostrarrecetas')->with('info', 'Receta actualizado');
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
