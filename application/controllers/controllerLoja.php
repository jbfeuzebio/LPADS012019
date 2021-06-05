<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLoja extends CI_Controller {
	function __construct(){
        parent:: __construct();
		$this->load->model('UsuarioModel','usuarioModel');
	}

	public function loja(){
		$this->load->model('ProdutoModel','produtoModel');
		$this->load->helper('url');
		$dados['lista_produtos'] = $this->produtoModel->get_todos_produtos();
		$this->load->view('componentes/head');
		$this->load->view('componentes/header');
		$this->load->view('componentes/nav');
		$this->load->view('loja/promocoes');
		$this->load->view('loja/produtos', $dados);
		$this->load->view('componentes/footer');
	}
	
	public function cadastra_usuario(){
		$this->load->helper('url');
		$this->load->view('componentes/teste');
		$this->usuarioModel->registrar_usuario();
	}
	
	public function cadastra_produto(){
		$this->load->model('ProdutoModel','produtoModel');
		$this->load->helper('url');
		$this->load->view('componentes/testeProduto');
		$this->produtoModel->cadastra_produto();
	}

	public function editar_usuario(){
		$this->load->helper('url');
		$dados['usuario_logado']= $this->usuarioModel->get_usuario();
		$this->load->view('componentes/teste_edita', $dados);
		$this->usuarioModel->alterar_infos_usuario();
	}


	public function cadastrar_usuario_controle(){
		$this->load->helper('url');
		$this->load->view('componentes/teste');
		$this->usuarioModel->registrar_usuario();
	}

	public function login_usuario(){
		$this->load->helper("url");
		$this->load->view('componentes/teste_login');
		$this->usuarioModel->validar_login();
	}

	public function forbidden(){
		$this->load->helper("url");
		$this->load->view('errors/index');
	}

	public function deletar_usuario(){
		$this->load->helper("url");
		$this->usuarioModel->deletar_usuario();
	}


}