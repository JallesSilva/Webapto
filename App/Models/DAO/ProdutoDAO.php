<?php

namespace App\Models\DAO;

use App\Models\Entidades\Produto;

class ProdutoDAO extends BaseDAO
{
    public  function listar($id = null)
    {        
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM produto WHERE id = $id"
            );

            return $resultado->fetchObject(Produto::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM produto'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Produto::class);
        }

        return false;
    }

    public  function salvar(Produto $produto) 
    {
        try {            
             
            $chave_AnoVigor         = $produto->getChave_AnoVigor();     
            $codigo_produto_barra   = $produto->getCodigo_produto_barra();
            $codigo_produto         = $produto->getCodigo_produto();     
            $descricao              = $produto->getDescricao();
            $categoria              = $produto->getCategoria();
            //$dataEntrada            = $produto->getDataEntrada()->format('Y-m-d H:i:s');
            $estoqueMinimo          = $produto->getEstoqueMinimo();
            $estoqueIdeal           = $produto->getEstoqueIdeal();   
            $estoqueTotal           = $produto->getEstoqueTotal();       
            $precoCusto             = $produto->getPrecoCusto();         
            $precoTotal             = $produto->getPrecoTotal();
            $margemLucro            = $produto->getMargemLucro();         

            return $this->insert(
                'produto',
                ":chave_AnoVigor,
                :codigo_produto_barra,
                :codigo_produto,
                :descricao,
                :categoria,              
                :estoqueMinimo,
                :estoqueIdeal,
                :estoqueTotal,
                :precoCusto,
                :precoTotal,
                :margemLucro",

                [
                    ':chave_AnoVigor'       =>$chave_AnoVigor,
                    ':codigo_produto_barra' =>$codigo_produto_barra,
                    ':codigo_produto'       =>$codigo_produto,
                    ':descricao'            =>$descricao,
                    ':categoria'            =>$categoria,
                    ':estoqueMinimo'        =>$estoqueMinimo,
                    ':estoqueIdeal'         =>$estoqueIdeal,
                    ':estoqueTotal'         =>$estoqueTotal,
                    ':precoCusto'           =>$precoCusto,
                    ':precoTotal'           =>$precoTotal,
                    ':margemLucro'          =>$margemLucro                    
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de Produto.", 500);
        }
    }

    public  function atualizar(Produto $produto) 
    {
        try {

            $id                     = $produto->getId();           
            $chave_AnoVigor         = $produto->getChave_AnoVigor();     
            $codigo_produto_barra   = $produto->getCodigo_produto_barra();
            $codigo_produto         = $produto->getCodigo_produto();     
            $descricao              = $produto->getDescricao();
            $categoria              = $produto->getCategoria();
            $dataEntrada            = $produto->getDataEntrada()->format('Y-m-d H:i:s');
            $estoqueMinimo          = $produto->getEstoqueMinimo();
            $estoqueIdeal           = $produto->getEstoqueIdeal();   
            $estoqueTotal           = $produto->getEstoqueTotal();       
            $precoCusto             = $produto->getPrecoCusto();         
            $precoTotal             = $produto->getPrecoTotal();
            $margemLucro            = $produto->getMargemLucro();         

            return $this->update(
                'produto',
                "chave_AnoVigor = :chave_AnoVigor,
                codigo_produto_barra = :codigo_produto_barra,
                codigo_produto = :codigo_produto,
                descricao = :descricao,
                categoria = :categoria,              
                estoqueMinimo = :estoqueMinimo,
                estoqueIdeal = :estoqueIdeal,
                estoqueTotal = :estoqueTotal,
                precoCusto = :precoCusto,
                precoTotal = :precoTotal,
                margemLucro = :margemLucro",

                [
                    ':id'                   =>$id,
                    ':chave_AnoVigor'       =>$chave_AnoVigor,
                    ':codigo_produto_barra' =>$codigo_produto_barra,
                    ':codigo_produto'       =>$codigo_produto,
                    ':descricao'            =>$descricao,
                    ':categoria'            =>$categoria,                    
                    ':estoqueMinimo'        =>$estoqueMinimo,
                    ':estoqueIdeal'         =>$estoqueIdeal,
                    ':estoqueTotal'         =>$estoqueTotal,
                    ':precoCusto'           =>$precoCusto,
                    ':precoTotal'           =>$precoTotal,
                    ':margemLucro'          =>$margemLucro,                    
                ],
                "id = :id"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na atualização de dados. ", 500);
        }
    }

    public function excluir(Produto $produto)
    {
        try {
            $id = $produto->getId();

            return $this->delete('produto',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar Produto", 500);
        }
    }
}