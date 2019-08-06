<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Clientes;

class ClientesValidador{

    public function validar(Clientes $clientes)
    {
        $resultadoValidacao = new ResultadoValidacao();

        if(empty($clientes->getemail()))
        {
            $resultadoValidacao->addErro('email',"Email: Este campo não pode ser vazio");
        }

        if(empty($clientes->getnome()))
        {
            $resultadoValidacao->addErro('nome',"Nome: Este campo não pode ser vazio");
        }
        
		if(empty($clientes->gettelefone()))
        {
            $resultadoValidacao->addErro('telefone',"Telefone: Este campo não pode ser vazio");
        }       

        return $resultadoValidacao;
    }
}