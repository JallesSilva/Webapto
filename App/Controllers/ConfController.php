<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ConfDAO;
use App\Models\Entidades\Conf;

use Schema;

class ConfController extends Controller
{
	public function index()
    {
        $this->render('/conf/index');

        Sessao::limpaMensagem();
    }
}