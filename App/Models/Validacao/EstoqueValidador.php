<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Estoque;

class EstoqueValidador{

	public function validar(Estoque $estoque)
    {
        //var_dump($estoque);die();
    	$resultadoValidacao = new ResultadoValidacao();

        if(empty($estoque->getChave_Categoria()))
        {
            $resultadoValidacao->addErro('Categoria',"Este campo não pode ser vazio");
        }

        if(empty($estoque->getCodigo_Barras()))
        {
            $resultadoValidacao->addErro('Codigo_Barras',"Este campo não pode ser vazio");
        }

        if(empty($estoque->getDescricao()))
        {
            $resultadoValidacao->addErro('Descricao',"Este campo não pode ser vazio");
        }

        if(empty($estoque->getEstoque_Atual()))
        {
            $resultadoValidacao->addErro('Estoque_Atual',"Este campo não pode ser vazio");
        }

        if(empty($estoque->getEstoque_Minimo()))
        {
            $resultadoValidacao->addErro('Estoque_minimo',"Este campo não pode ser vazio");
        }

        if(empty($estoque->getValor_Venda()))
        {
            $resultadoValidacao->addErro('Valor_Venda',"Este campo não pode ser vazio");
        }

        if(empty($estoque->getValor_Custo()))
        {
            $resultadoValidacao->addErro('Valor_Custo',"Este campo não pode ser vazio");
        }

        return $resultadoValidacao;
    }
}