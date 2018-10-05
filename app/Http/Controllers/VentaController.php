<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venta;
use App\cliente;
use App\stock;
use DB;
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $ventas = venta::all();
        return view('mostrarventa', ['ventas' =>$ventas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
           $categorias=stock::all();
           $clientes=cliente::all();
         return view('venta',compact('categorias','clientes'));
    }

    public function ventasordenar()
    {
          $cursos=DB::table('venta')

//->select('idasignacion','curso.curso','asignacion.notacurso','estudiante.nombre_estudiante')
->select('venta.producto_venta as producto','venta.cantidad_venta as cantidad')
 //->select(DB::raw('count(*) as total_cursos, asignacion.estudiante_idestudiante'))

 //->groupBy('asignacion.estudiante_idestudiante')

->get();

return view('mostrarventasreportes')->with('cursos', $cursos);

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

        $nombre_cliente= $request->input('nombrecliente_venta') ;
         $producto_venta = $request->input('producto_venta') ;
         $cantidad = $request->input('cantidad_venta') ;
         $total = $request->input('total') ;

         DB::table('stock')->decrement('existencias', $cantidad);
        
          
      DB::insert('insert into venta (nombrecliente_venta,producto_venta,cantidad_venta,total) values(?,?,?,?) ',[$nombre_cliente,$producto_venta,$cantidad,$total ]);
        return redirect('/mostrarventa')->with('info', 'venta agregado');
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
