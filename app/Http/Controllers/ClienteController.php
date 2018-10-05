<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = cliente::all();
        return view('mostrarcliente', ['clientes' =>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('cliente');
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

        $nombre_cliente = $request->input('nombre_cliente') ;
         $telefono_cliente = $request->input('telefono_cliente') ;
         $direccion_cliente = $request->input('direccion_cliente') ;
          
      DB::insert('insert into cliente (nombre_cliente,telefono_cliente,direccion_cliente) values(?,?,?) ',[$nombre_cliente,$telefono_cliente,$direccion_cliente ]);
        return redirect('/mostrarcliente')->with('info', 'cliente agregado');
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
        $cliente=cliente::where('idcliente',$id)->first();
        return view('edit_clientes',['cliente'=>$cliente]);
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
            'nombre_cliente' => 'required',
            'telefono_cliente' => 'required',
            'direccion_cliente' => 'required'
            
          
        ]);
        $data = array(
            'nombre_cliente' => $request->input('nombre_cliente'),
            'telefono_cliente' => $request->input('telefono_cliente'),
            'direccion_cliente' => $request->input('direccion_cliente')
            
        );
        
        cliente::where('idcliente',$id)->update($data);      
        return redirect('/mostrarcliente')->with('info', 'cliente actualizado');
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
