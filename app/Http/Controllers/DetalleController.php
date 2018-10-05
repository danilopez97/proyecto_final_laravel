<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle;
use DB;
use App\materiap;
use App\produccion;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detalles = detalle::all();
        return view('mostrardetalle', ['detalles' =>$detalles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias=materiap::all();
        $holas=produccion::all();
         return view('detalle',compact('categorias','holas'));

     
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



        $produccion_idproduccion = $request->input('produccion_idproduccion') ;
         $materia_idmateria= $request->input('materia_idmateria') ;
         $cantidad_materia_prima= $request->input('cantidad_materia_prima') ;


$cursos=DB::table('materia')
->join('detalle_produccion','detalle_produccion.materia_idmateria','=','materia.idmateria')
//->join('estudiante','estudiante.idestudiante','=','asignacion.estudiante_idestudiante')
//->select('idasignacion','curso.curso','asignacion.notacurso','estudiante.nombre_estudiante')
->select('materia.cantidad_materia as cantidad')
 //->select(DB::raw('count(*) as total_cursos, asignacion.estudiante_idestudiante'))
->where('materia.idmateria','=',$materia_idmateria)
 //->groupBy('asignacion.estudiante_idestudiante')

->get();

 
//dd($cursos);


for($i=0;$i<1;$i++){
                            //echo $cursos[$i]->cantidad."<br>";
                          
                         
                         }


//Conexion con la base



 //return view('Listarcursoestudiante')->with('cursos', $cursos);

//DB::table('materia')
      //     ->where('idmateria', $materia_idmateria)
          //  ->update(['cantidad_materia' => ]);

                         DB::table('materia')->decrement('cantidad_materia', $cantidad_materia_prima);



     DB::insert('insert into detalle_produccion (produccion_idproduccion,materia_idmateria,cantidad_materia_prima) values(?,?,?) ',[$produccion_idproduccion,$materia_idmateria,$cantidad_materia_prima]);

        return redirect('/mostrardetalle')->with('info', 'materia prima agregado a produccion');
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
