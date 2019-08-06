<?php

namespace App\Models\DAO;

use App\Models\Entidades\Clientes;
use App\Models\DAO\BaseDAO;

class EmailDAO extends BaseDAO
{   
    public  function listar($chave_email = null)
    {
        if($chave_email) {
            $resultado = $this->select(
                "SELECT * FROM email WHERE chave_email = $chave_email"
            );

            return $resultado->fetchObject(Email::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM email'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Email::class);
        }

        return false;
    }

    public  function salvar(Clientes $clientes)
    {
        try {

            $email              = $clientes->getemail();
            $nome               = $clientes->getnome();
            $telefone           = $clientes->gettelefone();            
            //$datacadastro       = $usuario->getdatacadastro()->format('Y-m-d H:i:s');
                        
            return $this->insert(
                'clientes',
                ":email, 
                :nome, 
                :telefone",

                [
                    ':email'=>$email,
                    ':nome'=>$nome,
                    ':telefone'=>$telefone

                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Clientes $clientes) 
    {
        try {

            $chave_usuario      = $clientes->getchave_usuario();
            $email              = $clientes->getemail();
            $nome               = $clientes->getnome();
            $telefone           = $clientes->gettelefone();            
            //$datacadastro       = $clientes->getdatacadastro()->format('Y-m-d H:i:s');
            
            return $this->update(
                'clientes',
                "chave_usuario = :chave_usuario,
                 email = :email,
                 nome = :nome,
                 telefone = :telefone",
                [
                    ':chave_usuario'=>$chave_usuario,
                    ':email'=>$email,
                    ':nome'=>$nome,
                    ':telefone'=>$telefone,
                ],
                'chave_usuario = :chave_usuario'
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao alterar os dados.", 500);
        }
    }

    public function excluir(Clientes $clientes)
    {
        try {
            $chave_usuario = $clientes->getchave_usuario();

            return $this->delete('clientes',"chave_usuario = $chave_usuario");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar registro.", 500);
        }
    }
}

