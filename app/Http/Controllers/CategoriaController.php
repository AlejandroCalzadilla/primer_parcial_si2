<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    //
   // no deja entrar si no estas logueado
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
        //
        $categorias=Categoria::orderBy('id','asc')->paginate(5);
        return view('categorias.index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias =Categoria::all();
        return view('categorias.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $categorias = new Categoria;
        $categorias->nombre= $request->nombre;
        $categorias->genero= $request->genero; 

        $categorias->save();
        return redirect()->route('categorias.show',$categorias)->with('success', 'Producto creado exitosamente.');

    }

    
    public function show(Categoria $categoria)
    {
        return view('categorias.show',compact('categoria'));
    }

  
    public function edit(Categoria $categoria)
    {
        //
        return view('categorias.edit', compact('categoria'));
    }

  
    public function update(Request $request,Categoria $talla)
    {
        //
        $talla->update($request->all());
        return redirect()->route('categorias.index')->with('success', 'Producto actualizado exitosamente.');
    }

   
    public function destroy(Categoria $categoria)
    {
        //
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Producto eliminado exitosamente.');
    }



}
