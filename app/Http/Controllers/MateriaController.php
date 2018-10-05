<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\materiap;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materias = materiap::all();
        return view('mostrarmateria', ['materias' =>$materias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('materia');
    }

 public function reporteprima()
    {
         $cursos=DB::table('materia')

//->select('idasignacion','curso.curso','asignacion.notacurso','estudiante.nombre_estudiante')
->select('materia.idmateria as id','materia.descripcion_materia as descripcion','materia.cantidad_materia as cantidad')
 //->select(DB::raw('count(*) as total_cursos, asignacion.estudiante_idestudiante'))

 //->groupBy('asignacion.estudiante_idestudiante')

->get();

return view('mostrarprimareportes')->with('cursos', $cursos);
        
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
         $descripcion_materia = $request->input('descripcion_materia') ;
         $cantidad_materia = $request->input('cantidad_materia') ;
          $precio_materia = $request->input('precio_materia') ;
          
      DB::insert('insert into materia (descripcion_materia,cantidad_materia,precio_materia) values(?,?,?) ',[$descripcion_materia,$cantidad_materia, $precio_materia ]);
        return redirect('/mostrarmateria')->with('info', 'Materia Prima agregado');
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
         $materia=materiap::where('idmateria',$id)->first();
        return view('edit_materia',['materia'=>$materia]);
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
            'descripcion_materia' => 'required',
            'cantidad_materia' => 'required',
            'precio_materia' => 'required',
            
            
          
        ]);
        $data = array(
            'descripcion_materia' => $request->input('descripcion_materia'),
            'cantidad_materia' => $request->input('cantidad_materia'),
             'precio_materia' => $request->input('precio_materia')
            
        );
        
        materiap::where('idmateria',$id)->update($data);      
        return redirect('/mostrarmateria')->with('info', 'Materia Prima actualizado');
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
