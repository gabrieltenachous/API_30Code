<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }
    public function show($id){
        return Produto::find($id);
    }
    public function store(Request $request)
    {

        $produto = new Produto();
        $produto->nivel = $request->nivel;
        $produto->description = $request->description;
        $produto->detalhe = $request->detalhe;
        $produto->title = $request->title;
        $produto->image = $request->image;
        $produto->save();
        return $produto;
    }
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nivel = $request->nivel;
        $produto->description = $request->description;
        $produto->detalhe = $request->detalhe;
        $produto->title = $request->title;
        $produto->image = $request->image;
        $produto->save();
        return $produto;
    }
    public function delete($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return 204; 
    }
}
