<?php

namespace App\Services;

use App\Models\Produto;

class ProdutoService
{
    public function index()
    {
        return Produto::all();
    }

    public function indexByPreco(string $preco)
    {
        if ($preco === 'baixo') {
            return Produto::orderBy('preco', 'asc')->get();
        }
        return Produto::orderBy('preco', 'desc')->get();
    }

    public function show(string $codigo)
    {
        return Produto::where('codigo', $codigo)->first();
    }
}
