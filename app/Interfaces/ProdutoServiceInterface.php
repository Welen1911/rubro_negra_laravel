<?php

namespace App\Interfaces;

interface ProdutoServiceInterface
{
    public function index();
    public function indexByPreco(string $preco);
    public function show(string $codigo);
}
