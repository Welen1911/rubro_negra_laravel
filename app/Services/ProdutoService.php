<?php

namespace App\Services;

use App\Models\Produto;

class ProdutoService
{
    public function index()
    {
        return Produto::all();
    }

    public function store(array $data)
    {
        return Produto::create($data);
    }

    public function show(string $id)
    {
        return Produto::find($id);
    }

    public function update(array $data, string $id)
    {
        $produto = Produto::find($id);
        $produto->update($data);
        return $produto;
    }

    public function destroy(string $id)
    {
        return Produto::destroy($id);
    }
}
