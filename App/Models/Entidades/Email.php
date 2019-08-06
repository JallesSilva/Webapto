<?php

namespace App\Models\Entidades;

use DateTime;

class Email
{   
    private $chave_email;
    private $descricao;    
    private $smtp_services;
    private $porta;
    private $tipo;    
    private $login;
    private $senha;
    private $datacadastro;

    /**
     * @return the $chave_email
     */
    public function getchave_emial;
    {
        return $this->chave_email;
    }
    
    /**
     * @param field_type $chave_email
     */
    public function setchave_email($chave_email)
    {
        $this->chave_email = $chave_email;
    }
    
    /**
    * @return the $descricao
    */
    public function getdescricao()
    {
        return $this->descricao;
    }

    /**
    *@return field_type $descricao
    */
    public function setdescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return the $smtp_services
     */
    public function getsmtp_services()
    {
        return $this->smtp_services;
    }
    
    /**
     * @param field_type $smtp_services
     */
    public function setsmtp_services($smtp_services)
    {
        $this->smtp_services = $smtp_services;
    }
        
    /**
     * @return the $porta
     */
    public function getporta()
    {
        return $this->porta;
    }
    
    /**
     * @param field_type $porta
     */
    public function setporta($porta)
    {
        $this->porta = $porta;
    }
     
     /**
     * @return the $tipo
     */
    public function gettipo()
    {
        return $this->tipo;
    }
    
    /**
     * @param field_type $tipo
     */
    public function settipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return the $login
     */
    public function getlogin()
    {
        return $this->login;
    }
    
    /**
     * @param field_type $login
     */
    public function setlogin($ligon)
    {
        $this->login = $login;
    }

    /**
     * @return the $senha
     */
    public function getsenha()
    {
        return $this->senha;
    }
    
    /**
     * @param field_type $senha
     */
    public function setsenha($senha)
    {
        $this->senha = $senha;
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