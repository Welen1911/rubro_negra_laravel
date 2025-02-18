<?php

namespace App\Utils;

class PassarProdutosArray
{

    public static function passarArray($produtos)
    {
        $produtosArray = [];
        foreach ($produtos as $produto) {
            $produtosArray[] = [
                'nome' => $produto->nome,
                'preco' => $produto->preco,
                'codigo' => $produto->codigo,
            ];
        }
        return $produtosArray;
    }

    public static function buscarCodigoArray($produtos, $codigo)
    {
        foreach ($produtos as $produto) {
            if ($produto['codigo'] === $codigo) {
                return $produto;
            }
        }
        return null;
    }
}
