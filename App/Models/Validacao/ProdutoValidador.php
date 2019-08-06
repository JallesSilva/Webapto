<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Produto;

class ProdutoValidador{

    public function validar(Produto $produto)
    {
        $resultadoValidacao = new ResultadoValidacao();

        if(empty($produto->getChave_AnoVigor()))
        {
            $resultadoValidacao->addErro('chave_AnoVigor',"Ano Vigor: Este campo não pode ser vazio");
        }
        
        if(empty($produto->getCodigo_produto_barra()))
        {
            $resultadoValidacao->addErro('codigo_produto_barra',"Codigo Barra: Este campo não pode ser vazio");
        }

        if(empty($produto->getCodigo_produto()))
        {
            $resultadoValidacao->addErro('codigo_produto',"Codigo Produto: Este campo não pode ser vazio");
        }

        if(empty($produto->getDescricao()))
        {
            $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
        }

        if(empty($produto->getCategoria()))
        {
            $resultadoValidacao->addErro('categoria',"Categoria: Este campo não pode ser vazio");
        }

        if(empty($produto->getDataEntrada()))
        {
            $resultadoValidacao->addErro('dataEntrada',"Data Entrada: Este campo não pode ser vazio");
        }

        if(empty($produto->getEstoqueMinimo()))
        {
            $resultadoValidacao->addErro('estoqueMinimo',"Estoque Minino: Este campo não pode ser vazio");
        }

        if(empty($produto->getEstoqueIdeal()))
        {
            $resultadoValidacao->addErro('estoqueIdeal',"Estoque Ideal: Este campo não pode ser vazio");
        }

        if(empty($produto->getEstoqueTotal()))
        {
            $resultadoValidacao->addErro('estoqueTotal',"Estoque Total: Este campo não pode ser vazio");
        }

        if(empty($produto->getPrecoCusto()))
        {
            $resultadoValidacao->addErro('precoCusto',"Preco Custo: Este campo não pode ser vazio");
        }

        if(empty($produto->getPrecoTotal()))
        {
            $resultadoValidacao->addErro('precoTotal',"Preco Total: Este campo não pode ser vazio");
        }

        if(empty($produto->getMargemLucro()))
        {
            $resultadoValidacao->addErro('margemLucro',"Margem Lucro: Este campo não pode ser vazio");
        }

        return $resultadoValidacao;
    }
}