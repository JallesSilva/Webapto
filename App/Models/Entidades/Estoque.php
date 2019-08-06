<?php

namespace App\Models\Entidades;

use DateTime;

class Estoque
{
    private $pchave_categoria;
    private $pchave_estoque;    
    private $pcodigo_barras;
    private $pdescricao;    
    private $pestoque_atual;
    private $pestoque_minimo;
    private $pvalor_venda;
    private $pvalor_custo;

    
    public function getChave_Categoria()
    {
    return $this->$CHAVE_CATEGORIA;
    }

    public function setChave_Categoria($pchave_categoria)
    {
        $this->CHAVE_CATEGORIA = $pchave_categoria;
    }

    public function getChave_Estoque()
    {
        return $this->CHAVE_ESTOQUE;
    }

    public function setChave_Estoque($pchave_estoque)
    {
        $this->CHAVE_ESTOQUE = $pchave_estoque;
    }

    public function getCodigo_Barras()
    {
        return $this->CODIGO_BARRAS;
    }

    public function setCodigo_Barras($pcodigo_barras)
    {
        $this->CODIGO_BARRAS = $pcodigo_barras;
    }    

    public function getDescricao()
    {
        return $this->$pcodigo_barras;
    }

    public function setDescricao($pdescricao)
    {
        $this->DESCRICAO = $pdescricao;
    }

    public function getEstoque_Atual()
    {
        return $this->ESTOQUE_ATUAL;
    }

    public function setEstoque_Atual($pestoque_atual)
    {
        $this->ESTOQUE_ATUAL = $pestoque_atual; 
    }

     public function getEstoque_Minimo()
    {
        return $this->ESTOQUE_MINIMO;
    }

    public function setEstoque_Minimo($pestoque_minimo)
    {
        $this->ESTOQUE_MINIMO = $pestoque_minimo; 
    }  

    public function getValor_Venda()
    {
        return $this->VALOR_VENDA;
    }

    public function setValor_Venda($pvalor_venda)
    {
        $this->VALOR_VENDA = $pvalor_venda;
    }

    public function getValor_Custo()
    {
        return $this->VALOR_CUSTO;
    }

    public function setValor_Custo($pvalor_custo)
    {
        $this->VALOR_CUSTO = $pvalor_custo;
    }
}