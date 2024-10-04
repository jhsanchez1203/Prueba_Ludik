<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //Vista principal para listar los productos
    public function index()
    {
        $productos=Producto::orderby('nombre','asc')->get();
        return view('producto.index')->with(compact('productos'));
    }

    //Vista principal para el formulario de registro de productos
    public function create()
    {
        return view('producto.create');
    }

    //Función para guardar los productos en la bd
    public function store(Request $request){

        $data = $request->validate([
            'nombre'      => 'required|string|max:150', 
            'descripcion' => 'required|string', 
            'precio'      => 'required|numeric|min:0', 
            'stock'       => 'required|integer|min:0', 
        ]);
    
        
        $producto = new Producto();
        $producto->nombre = $data['nombre']; 
        $producto->descripcion = $data['descripcion'];
        $producto->precio = $data['precio'];
        $producto->stock = $data['stock'];
        
        $producto->save();
        
        return redirect()->route('producto.index')->with('success','Producto registrado correctamente!!!');
    }

    //Vista principal para el formulario que permite editar los datos de los productos
    public function edit($id){
        $producto=Producto::find($id);
        
        return view('producto.edit')->with(compact('producto'));
    }

    //Función para editar los productos guardados en la bd
    public function update(Request $request, $id){

        $data = $request->validate([
            'nombre'      => 'required|string|max:150', 
            'descripcion' => 'required|string', 
            'precio'      => 'required|numeric|min:0', 
            'stock'       => 'required|integer|min:0', 
        ]);

        $producto=Producto::find($id);
        $producto->nombre = $data['nombre']; 
        $producto->descripcion = $data['descripcion'];
        $producto->precio = $data['precio'];
        $producto->stock = $data['stock'];
        
        $producto->save();

        return redirect()->route('producto.index')->with('success','Producto actualizado correctamente!!!');
    }

    //Función para eliminar los productos guardados en la bd
    public function delete($id){
        $producto=Producto::findOrFail($id);
        $producto->delete();
       
        return redirect()->back()->with('success','Producto eliminado correctamente!!!');
    }
}
