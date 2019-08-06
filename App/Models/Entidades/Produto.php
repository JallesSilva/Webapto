<?php

namespace App\Models\Entidades;

use DateTime;

class Produto
{
    
    private $id;
    private $chave_AnoVigor;
    private $codigo_produto_barra;
    private $codigo_produto;
    private $descricao;
    private $categoria;
    private $dataEntrada;
    private $estoqueMinimo;
    private $estoqueIdeal;
    private $estoqueTotal;
    private $precoCusto;
    private $precoTotal;
    private $margemLucro;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getChave_AnoVigor()
    {
        return $this->chave_AnoVigor;
    }

    public function setChave_AnoVigor($chave_AnoVigor)
    {
        $this->chave_AnoVigor = $chave_AnoVigor;
    }

    public function getCodigo_produto_barra()
    {
        return $this->codigo_produto_barra;
    }

    public function setCodigo_produto_barra($codigo_produto_barra)
    {
        $this->codigo_produto_barra = $codigo_produto_barra;
    }

    public function getCodigo_produto()
    {
        return $this->codigo_produto;
    }

    public function setCodigo_produto($codigo_produto)
    {
        $this->codigo_produto = $codigo_produto;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDataEntrada()
    {
        return new DateTime($this->dataEntrada);
    }

    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;
    }

    public function getEstoqueMinimo()
    {
        return $this->estoqueMinimo;
    }

    public function setEstoqueMinimo($estoqueMinimo)
    {
        $this->estoqueMinimo = $estoqueMinimo;
    }

    public function getEstoqueIdeal()
    {
        return $this->estoqueIdeal;
    }

    public function setEstoqueIdeal($estoqueIdeal)
    {
        $this->estoqueIdeal = $estoqueIdeal;
    }

    public function getEstoqueTotal()
    {
        return $this->estoqueTotal;
    }

    public function setEstoqueTotal($estoqueTotal)
    {
        $this->estoqueTotal = $estoqueTotal;
    }

    public function getPrecoCusto()
    {
        return $this->precoCusto;
    }

    public function setPrecoCusto($precoCusto)
    {
        $this->precoCusto = $precoCusto;
    }

    public function getPrecoTotal()
    {
        return $this->precoTotal;
    }

    public function setPrecoTotal($precoTotal)
    {
        $this->precoTotal = $precoTotal;
    }

    public function getMargemLucro()
    {
        return $this->margemLucro;
    }

    public function setMargemLucro($margemLucro)
    {
        $this->margemLucro = $margemLucro;
    }

}