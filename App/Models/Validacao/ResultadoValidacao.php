<?php

namespace App\Models\Validacao;

class ResultadoValidacao{

    private $erros = [];
    
    public function addErro($campo, $mensagem){
        $this->erros[$campo] = $mensagem;
    }  

}