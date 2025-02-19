<?php

namespace App\Services;

use App\Interfaces\ProdutoServiceInterface;
use App\Models\Produto;
use App\Utils\PassarProdutosArvore;

class ProdutoServiceArvore implements ProdutoServiceInterface
{
    public function index()
    {
        $produtos = PassarProdutosArvore::passarArray(Produto::all());

        return $produtos;
    }

    public function indexByPreco(string $preco)
    {
        if ($preco === 'baixo') {
            return PassarProdutosArvore::passarArray(Produto::orderBy('preco', 'asc')
                ->get());
        }

        return PassarProdutosArvore::passarArray(Produto::orderBy('preco', 'desc')
            ->get());
    }

    public function show(string $codigo)
    {
        $produtos = PassarProdutosArvore::passarArray(Produto::all());

        $produto = PassarProdutosArvore::buscarCodigoArray($produtos, $codigo);

        return $produto;
    }
}
