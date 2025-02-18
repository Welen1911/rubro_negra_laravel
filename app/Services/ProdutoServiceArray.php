<?php

namespace App\Services;

use App\Interfaces\ProdutoServiceInterface;
use App\Models\Produto;
use App\Utils\PassarProdutosArray;

class ProdutoServiceArray implements ProdutoServiceInterface
{
    public function index()
    {
        $produtos = PassarProdutosArray::passarArray(Produto::all());

        return $produtos;
    }

    public function indexByPreco(string $preco)
    {
        if ($preco === 'baixo') {
            return PassarProdutosArray::passarArray(Produto::orderBy('preco', 'asc')
                ->get());
        }

        return PassarProdutosArray::passarArray(Produto::orderBy('preco', 'desc')
            ->get());
    }

    public function show(string $codigo)
    {
        $produtos = PassarProdutosArray::passarArray(Produto::all());

        $produto = PassarProdutosArray::buscarCodigoArray($produtos, $codigo);

        return $produto;
    }
}
