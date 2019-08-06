<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ClientesDAO;
use App\Models\Entidades\Clientes;
use App\Models\Validacao\ClientesValidador;

class ClientesController extends Controller
{
    public function index()
    {
        $clientesDAO = new ClientesDAO();

        self::setViewParam('listaClientes',$clientesDAO->listar());

        $this->render('/clientes/index');

        Sessao::limpaMensagem();
    }

    public function cadastro()
    {
        $this->render('/clientes/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }
    
    public function salvar()
    {
        $clientes = new Clientes();
        $clientes->setemail($_POST['email']);
        $clientes->setnome($_POST['nome']);
        $clientes->settelefone($_POST['telefone']);        
        $clientes->setdatanasc($_POST['datanasc']);
        $clientes->setsexo($_POST['sexo']);
        $clientes->setprofissao($_POST['profissao']);
        $clientes->setnaturalidade($_POST['naturalidade']);
        $clientes->setcpf($_POST['cpf']);
        $clientes->setrg($_POST['rg']);
        $clientes->setestado($_POST['estado']);
        $clientes->setmunicipio($_POST['municipio']);
        $clientes->setcep($_POST['cep']);
        $clientes->setendereco($_POST['endereco']);
        $clientes->setestadocivil($_POST['estadocivil']);
        $clientes->setdatacadastro($_POST['datacadastro'])->format('Y-m-d');
        
        Sessao::gravaFormulario($_POST);
        //var_dump($_POST);
        
        $clientesDAO = new ClientesDAO();

        

        $clientesDAO->salvar($clientes);
        
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/clientes');
      
    }
    
    public function edicao($params)
    {
        $chave_usuario = $params[0];

        $clientesDAO = new ClientesDAO();

        $clientes = $clientesDAO->listar($chave_usuario);

        if(!$clientes){
            Sessao::gravaMensagem("Cliente inexistente");
            $this->redirect('/clientes');
        }

        self::setViewParam('cliente',$clientes);

        $this->render('/clientes/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {
        $clientes = new Clientes();

        $clientes->setchave_usuario($_POST['chave_usuario']);
        $clientes->setemail($_POST['email']);
        $clientes->setnome($_POST['nome']);
        $clientes->settelefone($_POST['telefone']);        
        $clientes->setdatanasc($_POST['datanasc']);
        $clientes->setsexo($_POST['sexo']);
        $clientes->setprofissao($_POST['profissao']);
        $clientes->setnaturalidade($_POST['naturalidade']);
        $clientes->setcpf($_POST['cpf']);
        $clientes->setrg($_POST['rg']);
        $clientes->setestado($_POST['estado']);
        $clientes->setmunicipio($_POST['municipio']);
        $clientes->setcep($_POST['cep']);
        $clientes->setendereco($_POST['endereco']);
        $clientes->setestadocivil($_POST['estadocivil']);
        $clientes->setdatacadastro($_POST['datacadastro']);

        Sessao::gravaFormulario($_POST);

        $clientesValidador = new ClientesValidador();
        $resultadoValidacao = $clientesValidador->validar($clientes);
        
        $clientesDAO = new ClientesDAO();
        $clientesDAO->atualizar($clientes);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/clientes');

    }
    
    public function exclusao($params)
    {
        $chave_usuario = $params[0];

        $clientesDAO = new ClientesDAO();

        $clientes = $clientesDAO->listar($chave_usuario);

        if(!$clientes){
            Sessao::gravaMensagem("Cliente inexistente");
            $this->redirect('/clientes');
        }

        self::setViewParam('clientes',$clientes);

        $this->render('/clientes/exclusao');

        Sessao::limpaMensagem();

    }

    public function excluir()
    {
        $clientes = new Clientes();
        $clientes->setchave_usuario($_POST['chave_usuario']);

        $clientesDAO = new ClientesDAO();

        if(!$clientesDAO->excluir($clientes)){
            Sessao::gravaMensagem("Cliente inexistente");
            $this->redirect('/clientes');
        }

        Sessao::gravaMensagem("Cliente excluido com sucesso!");

        $this->redirect('/clientes');

    }
}