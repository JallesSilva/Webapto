<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;
use App\Controllers\Login;


class LoginDAO extends BaseDAO
{
    public  function login($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM usuario WHERE nome = '$usuario' && $senha"
            );

            return $resultado->fetchObject(Login::class);
        }else{
            $resultado = 'Erro login';
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Usuario::class);
        }

        return false;
    }
}

