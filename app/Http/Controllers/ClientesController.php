<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index()
    {
        $datos=Clientes::all();
        return view('inicio',compact('datos')); 
     }
    

   
    public function create()
    {
     return view('agregar');
      
    }

    
    public function store(Request $request)
    {
       
        $clientes=new Clientes();
        $clientes->id=$request->post("id");
        $clientes->Nombre=$request->post("Nombre");
        $clientes->Apellido=$request->post("Apellido");
        $clientes->num_identificacion=$request->post("num_identificacion");
        $clientes->fecha_registro=$request->post("fecha_registro");
        $clientes->Telefono=$request->post("Telefono");
        $clientes->estado_cliente=$request->post("estado_cliente");
        $clientes->save();
 
        return redirect()->route("clientes.index")->with("success","Agregado con exito!");
    }

    
    public function show($id)
    {
        $clientes=Clientes::find($id);
        return view("eliminar",compact('clientes'));
       

    }

    
    public function edit($id)
    {
    $clientes=Clientes::find($id);
    return view("actualizar",compact('clientes'));
    }

    
    public function update(Request $request, $id)
    {
        $clientes=Clientes::find($id);
        $clientes->id=$request->post("id");
        $clientes->Nombre=$request->post("Nombre");
        $clientes->Apellido=$request->post("Apellido");
        $clientes->num_identificacion=$request->post("num_identificacion");
        $clientes->fecha_registro=$request->post("fecha_registro");
        $clientes->Telefono=$request->post("Telefono");
        $clientes->estado_cliente=$request->post("estado_cliente");
        $clientes->save();

        return redirect()->route("clientes.index")->with("success","Actualizado con exito!");
       
        
    }

    
    public function destroy($id)

    {
       $clientes=Clientes::find($id);
       $clientes->delete();
       return redirect()->route("clientes.index")->with("success","Eliminado con exito!");
        
    }
}
