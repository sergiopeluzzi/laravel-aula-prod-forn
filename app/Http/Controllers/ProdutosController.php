<?php

namespace Unesc\Http\Controllers;

use Illuminate\Http\Request;
use Unesc\Produto;

class ProdutosController extends Controller
{
    public function index() {

        $titulo = 'Produtos';
        $produtos = Produto::all();

        return view('produtos.index', ["titulo" => $titulo, "produtos" => $produtos]);
    }

    public function create() {

        $titulo = "Novo Produto";

        return view('produtos.create', ["titulo" => $titulo]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Produto::create($formData);

        return redirect('/produtos');
    }

    public function edit($id) {
        
        $titulo = "Editar Produto";
        
        $produto = Produto::find($id);

        return view('produtos.edit', ["titulo" => $titulo, "produto" => $produto]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $produto = Produto::find($id);
        
        $produto->update($formData);

        return redirect('/produtos');
    }

    public function destroy($id) {
        $produto = Produto::find($id);
        
        $produto->delete();

        return redirect('/produtos');
    }
}
