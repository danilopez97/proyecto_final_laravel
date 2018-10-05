<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\recetas;
use DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = producto::all();
        return view('home', ['productos' =>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias=recetas::all();
         return view('producto',compact('categorias'));
   
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

         $descripcion_producto = $request->input('descripcion_producto') ;
         $receta_idreceta = $request->input('idreceta') ;
          
      DB::insert('insert into producto (descripcion_producto,receta_idreceta) values(?,?) ',[$descripcion_producto,$receta_idreceta ]);
        return redirect('/home')->with('info', 'producto agregado');
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
         $producto=producto::where('idproducto',$id)->first();
        return view('edit_productos',['producto'=>$producto]);
    
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
            'descripcion_producto' => 'required',
            'receta_idreceta' => 'required'
            
          
        ]);
        $data = array(
            'descripcion_producto' => $request->input('descripcion_producto'),
            'receta_idreceta' => $request->input('receta_idreceta')
            
        );
        
        producto::where('idproducto',$id)->update($data);      
        return redirect('/home')->with('info', 'producto actualizado');
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
