<?php

namespace App\Models\DAO;

use App\Models\Entidades\Clientes;
use App\Models\DAO\BaseDAO;

//    SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'webapto' AND TABLE_NAME = 'clientes'
class ClientesDAO extends BaseDAO
{   
    public  function listar($chave_usuario = null)
    {
        if($chave_usuario) {
            $resultado = $this->select(
                "SELECT * FROM clientes WHERE chave_usuario = $chave_usuario"
            );

            return $resultado->fetchObject(Clientes::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM clientes'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Clientes::class);
        }

        return false;
    }
    
    public  function salvar(Clientes $clientes)
    {
        try {
            
            $email              = $clientes->getemail();
            $nome               = $clientes->getnome();
            $telefone           = $clientes->gettelefone();
            $datanasc           = $clientes->getdatanasc()->format('Y-m-d');
            $sexo               = $clientes->getsexo();
            $profissao          = $clientes->getprofissao();
            $naturalidade       = $clientes->getnaturalidade();
            $cpf                = $clientes->getcpf();
            $rg                 = $clientes->getrg();
            $estado             = $clientes->getestado();
            $municipio          = $clientes->getmunicipio();
            $cep                = $clientes->getcep();
            $endereco           = $clientes->getendereco();
            $estadocivil        = $clientes->getestadocivil();
            $datacadastro       = $clientes->getdatacadastro()->format('Y-m-d');
                        
            return $this->insert(
                'clientes',
                ":email, 
                :nome, 
                :telefone,
                :datanasc,
                :sexo,
                :profissao,
                :naturalidade,
                :cpf,
                :rg,
                :estado,
                :municipio,
                :cep,
                :endereco,
                :estadocivil,
                :datacadastro",

                [
                    ':email'=>$email,
                    ':nome'=>$nome,
                    ':telefone'=>$telefone,
                    ':datanasc'=>$datanasc,
                    ':sexo'=>$sexo,
                    ':profissao'=>$profissao,
                    ':naturalidade'=>$naturalidade,
                    ':cpf'=>$cpf,
                    ':rg'=>$rg,
                    ':estado'=>$estado,
                    ':municipio'=>$municipio,
                    ':cep'=>$cep,
                    ':endereco'=>$endereco,
                    ':estadocivil'=>$estadocivil,
                    ':datacadastro'=>$datacadastro
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
            $datanasc           = $clientes->getdatanasc()->format('Y-m-d');
            $sexo               = $clientes->getsexo();
            $profissao          = $clientes->getprofissao();
            $naturalidade       = $clientes->getnaturalidade();
            $cpf                = $clientes->getcpf();
            $rg                 = $clientes->getrg();
            $estado             = $clientes->getestado();
            $municipio          = $clientes->getmunicipio();
            $cep                = $clientes->getcep();
            $endereco           = $clientes->getendereco();
            $estadocivil        = $clientes->getestadocivil();
            $datacadastro       = $clientes->getdatacadastro()->format('Y-m-d');
            
            return $this->update(
                'clientes',
                "chave_usuario = :chave_usuario,
                email = :email, 
                nome = :nome, 
                telefone = :telefone,
                datanasc = :datanasc,
                sexo = :sexo,
                profissao = :profissao,
                naturalidade = :naturalidade,
                cpf = :cpf,
                rg = :rg,
                estado = :estado,
                municipio = :municipio,
                cep = :cep,
                endereco = :endereco,
                estadocivil = :estadocivil,
                datacadastro = :datacadastro",

                [
                    ':chave_usuario'=>$chave_usuario,
                    ':email'=>$email,
                    ':nome'=>$nome,
                    ':telefone'=>$telefone,
                    ':datanasc'=>$datanasc,
                    ':sexo'=>$sexo,
                    ':profissao'=>$profissao,
                    ':naturalidade'=>$naturalidade,
                    ':cpf'=>$cpf,
                    ':rg'=>$rg,
                    ':estado'=>$estado,
                    ':municipio'=>$municipio,
                    ':cep'=>$cep,
                    ':endereco'=>$endereco,
                    ':estadocivil'=>$estadocivil,
                    ':datacadastro'=>$datacadastro
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

