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


}