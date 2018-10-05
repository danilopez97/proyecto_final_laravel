<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\stock;
use App\producto;
use Storage;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $stockes = stock::all();
     return view('mostrarstock', ['stockes' =>$stockes]);
       // return view ('mostrarstock');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            $categorias=producto::all();
         return view('stock',compact('categorias'));
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

          $existencias = $request->input('existencias') ;
        
        
           $precio = $request->input('precio') ;
            $producto_stock = $request->input('producto_stock') ;

 $imagen = $request->file('imagen') ;
         $file_route=time().'_'.$imagen->getClientOriginalName();
         Storage::disk('img_productos')->put ($file_route,file_get_contents($imagen->getRealPath()));
          
      DB::insert('insert into stock (existencias,imagen,precio,producto_stock) values(?,?,?,?) ',[$existencias,$file_route,$precio,$producto_stock ]);
        return redirect('mostrarstock')->with('info', 'producto agregado a stock');
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

         $stock=stock::where('idstock',$id)->first();
        return view('edit_stock',['stock'=>$stock]);
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
            'existencias' => 'required',
            'precio' => 'required'
            
          
        ]);
        $data = array(
            'existencias' => $request->input('existencias'),
            'precio' => $request->input('precio')
            
        );
        
        stock::where('idstock',$id)->update($data);      
        return redirect('/mostrarstock')->with('info', 'producto actualizado');
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
