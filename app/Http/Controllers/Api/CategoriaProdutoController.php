<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaProduto;

class CategoriaProdutoController extends Controller
{
    public function index()
    {
        return CategoriaProduto::with('categoria', 'produto')->get();
    }
    public function store(Request $request)
    {

        $categoriaProduto = new CategoriaProduto();
        $categoriaProduto->categoria_id = $request->categoria_id;
        $categoriaProduto->produto_id = $request->produto_id;
        $categoriaProduto->save();
        return $categoriaProduto;
    }
    public function update(Request $request, $id)
    {
        $categoriaProduto = CategoriaProduto::find($id);
        $categoriaProduto->categoria_id = $request->categoria_id;
        $categoriaProduto->produto_id = $request->produto_id;
        $categoriaProduto->save();
        return $categoriaProduto;
    }
    public function show($id){
        return CategoriaProduto::find($id);
    }
    public function delete($id)
    {
        $categoriaProduto = CategoriaProduto::find($id); 
        $categoriaProduto->delete();
        return 204;
    }
}
