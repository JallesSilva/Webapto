<?php

namespace App\Models\Entidades;

use DateTime;

class Clientes
{   
    private $chave_usuario;
    private $email;    
    private $nome;
    private $telefone;
    private $datanasc;
    private $sexo;
    private $estadocivil;
    private $profissao;
    private $naturalidade;
    private $cpf;
    private $rg;
    private $estado;
    private $municipio;
    private $cep;
    private $endereco;
    private $datacadastro;

    /**
     * @return the $chave_usuario
     */
    public function getchave_usuario()
    {
        return $this->chave_usuario;
    }
    
    /**
     * @param field_type $chave_usuario
     */
    public function setchave_usuario($chave_usuario)
    {
        $this->chave_usuario = $chave_usuario;
    }

    /**
     * @return the $email
    */
    public function getemail()
    {
        return $this->email;
    }


    /**
    *@return field_type $email
    */
    public function setemail($email)
    {
        $this->email = $email;
    }

    /**
     * @return the $nome
     */
    public function getnome()
    {
        return $this->nome;
    }
    
    /**
     * @param field_type $nome
     */
    public function setnome($nome)
    {
        $this->nome = $nome;
    }
        
    /**
     * @return the $telefone
     */
    public function gettelefone()
    {
        return $this->telefone;
    }
    
    /**
     * @param field_type $telefone
     */
    public function settelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    
    /**
     * @return the $datanasc
     */
    public function getdatanasc()
    {
        return new DateTime($this->datanasc);
    }
    
    /**
     * @param field_type $datanasc
     */
    public function setdatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
    }

    /**
     * @return the $sexo
     */
    public function getsexo()
    {
        return $this->sexo;
    }
    
    /**
     * @param field_type $sexo
     */
    public function setsexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return the $estadocivil
     */
    public function getestadocivil()
    {
        return $this->estadocivil;
    }
    
    /**
     * @param field_type $estadocivil
     */
    public function setestadocivil($estadocivil)
    {
        $this->estadocivil = $estadocivil;
    }

    /**
     * @return the $profissao
     */
    public function getprofissao()
    {
        return $this->profissao;
    }
    
    /**
     * @param field_type $profissao
     */
    public function setprofissao($profissao)
    {
        $this->profissao = $profissao;
    }

    /**
     * @return the $naturalidade
     */
    public function getnaturalidade()
    {
        return $this->naturalidade;
    }
    
    /**
     * @param field_type $naturalidade
     */
    public function setnaturalidade($naturalidade)
    {
        $this->naturalidade = $naturalidade;
    }

    /**
     * @return the $cpf
     */
    public function getcpf()
    {
        return $this->cpf;
    }
    
    /**
     * @param field_type $cpf
     */
    public function setcpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return the $rg
     */
    public function getrg()
    {
        return $this->rg;
    }
    
    /**
     * @param field_type $rg
     */
    public function setrg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return the $estado
     */
    public function getestado()
    {
        return $this->estado;
    }
    
    /**
     * @param field_type $estado
     */
    public function setestado($estado)
    {
        $this->estado = $estado;
    }
    
    /**
     * @return the $municipio
     */
    public function getmunicipio()
    {
        return $this->municipio;
    }
    
    /**
     * @param field_type $municipio
     */
    public function setmunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return the $cep
     */
    public function getcep()
    {
        return $this->cep;
    }
    
    /**
     * @param field_type $cep
     */
    public function setcep($cep)
    {
        $this->cep = $cep;
    }
    
    /**
     * @return the $endereco
     */
    public function getendereco()
    {
        return $this->endereco;
    }
    
    /**
     * @param field_type $endereco
     */
    public function setendereco($endereco)
    {
        $this->endereco = $endereco;
    }
        
    /**
     * @return the $datacadastro
     */
    public function getdatacadastro()
    {
        return new DateTime($this->datacadastro);
    }
    
    /**
     * @param field_type $datacadastro
     */
    public function setdatacadastro($datacadastro)
    {
        $this->datacadastro = $datacadastro;
    }
    
}