<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;


//use Iluminate\Support\Facades\Stor
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
        //
        $producto=Producto::orderBy('id','asc')->paginate(5);
        return view('productos.index', compact('producto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos =Producto::all();
        return view('productos.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'imagen'=>'required|image|max:2048'
        ]);
        //$producto = new   producto;
        //$producto->descripcion= $request->descripcion;
        //$producto->imagen= $request->imagen; 
        //$producto->marca=$request->marca;

        //$producto->save();
       // return redirect()->route('prodcutos.show',$producto)->with('success', 'Producto creado exitosamente.');
        return $request->file('imagen')->store('');
        //return $request->file('imagen');
    }

    
    public function show(Producto $producto)
    {
        return view('productos.show',compact('categoria'));
    }

  
    public function edit(Producto $producto)
    {
        //
        return view('productos.edit', compact('categoria'));
    }

  
    public function update(Request $request,Producto $producto)
    {
        //
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

   
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }

}
