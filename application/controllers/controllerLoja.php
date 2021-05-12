<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLoja extends CI_Controller {
	function __construct(){
        parent:: __construct();
		$this->load->model('UsuarioModel','usuarioModel');
	}

	public function loja(){

	}
	
	public function cadastra_usuario(){
		$this->load->helper('url');
		$this->load->view('componentes/teste');
		$this->usuarioModel->registrar_usuario();
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


}