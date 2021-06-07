<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        
        return Categoria::with('categoriaProdutos')->get();
    }
    public function show($id){
        return Categoria::find($id);
    }
    public function store(Request $request)
    {

        $categoria = new Categoria();
        $categoria->image = $request->image; 
        $categoria->save();
        return $categoria;
    }
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->image = $request->image;
        $categoria->save();
        return $categoria;
    }
    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return 204; 
    }
}
