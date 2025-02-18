<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProdutoServiceArray;
use Illuminate\Http\Request;

class ProdutoArrayController extends Controller
{

    public function __construct(
        private ProdutoServiceArray $produtoService
    ) {}


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if (isset($request->preco)) {
            $produtos = $this->produtoService->indexByPreco($request->preco);
            return response()->json($produtos);
        } else {
            $produtos = $this->produtoService->index();
        }


        return response()->json($produtos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $codigo)
    {
        $produto = $this->produtoService->show($codigo);

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        return response()->json($produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
