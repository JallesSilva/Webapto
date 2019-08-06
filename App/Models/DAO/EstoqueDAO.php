<?php

namespace App\Models\DAO;

use App\Models\Entidades\Estoque;

class EstoqueDAO extends BaseDAO
{

    public  function listar($pchave_estoque = null)
    {        
        if($pchave_estoque) {
            $resultado = $this->select(
                "SELECT * FROM ESTOQUE WHERE CHAVE_ESTOQUE = $pchave_estoque"

            );

            return $resultado->fetchObject(Estoque::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM ESTOQUE'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Estoque::class);
        }
        return false;
    }

    public  function salvar(Estoque $estoque) 
    {
        try {            
            
            return $this->insert(
                'estoque',
                ":chave_categoria,
                 :chave_estoque,                 
                 :codigo_barras,
                 :descricao,                                                
                 :estoque_atual,
                 :estoque_minimo,
                 :valor_venda,
                 :valor_custo",

                [

                ':chave_categoria'      =>$estoque->getChave_Categoria(),
                ':chave_estoque'        =>$estoque->getChave_Estoque(),
                ':codigo_barras'        =>$estoque->getCodigo_Barras(),
                ':descricao'            =>$estoque->getDescricao(),
                ':estoque_atual'        =>$estoque->Estoque_Atual(),
                ':estoque_minimo'       =>$estoque->getEstoque_Minimo(),
                ':valor_venda'          =>$estoque->getValor_Venda(),
                ':valor_custo'          =>$estoque->getValor_Custo()
                
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação do Estoque.", 500);
        }
    }

    public  function atualizar(Estoque $estoque) 
    {
        try {

            $pchave_categoria        = $estoque->getChave_Categoria();
            $pchave_estoque          = $estoque->getChave_Estoque();              
            $pcodigo_barras          = $estoque->getCodigo_Barras();
            $pdescricao              = $estoque->getDescricao();                 
            $pestoque_atual          = $estoque->getEstoque_Atual();
            $pestoque_minimo         = $estoque->getEstoque_Minimo();                   
            $pvalor_venda            = $estoque->getValor_Venda();
            $pvalor_custo            = $estoque->getValor_Custo();

            return $this->update(
                'estoque',
                "chave_categoria    =  :chave_categoria,
                chave_estoque       =  :chave_estoque,
                codigo_barras       =  :codigo_barras,
                descricao           =  :descricao,
                estoque_atual       =  :estoque_atual,              
                estoque_minimo      =  :estoque_minimo,
                valor_venda         =  :valor_venda,
                valor_custo         =  :valor_custo",

                [
                    ':chave_categoria'      =>$pchave_categoria,
                    ':chave_estoque'        =>$pchave_estoque,
                    ':codigo_barras'        =>$pcodigo_barras,
                    ':descricao'            =>$pdescricao,
                    ':estoque_atual'        =>$pestoque_atual,
                    ':estoque_minimo'       =>$pestoque_minimo,                    
                    ':valor_venda'          =>$pvalor_venda,
                    ':valor_custo'          =>$pvalor_custo,                    
                ],
                "chave_estoque = :chave_estoque"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na atualização de dados. ", 500);
        }
    }

    public function excluir(Estoque $estoque)
    {
        try {
            $pchave_estoque = $estoque->getchave_estoque();

            return $this->delete('estoque',"CHAVE_ESTOQUE = $pchave_estoque");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar Estoque", 500);
        }
    }
}