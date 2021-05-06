<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

    function __construct(){
        parent:: __construct();

        $this->load->model('ProdutoModel','produto');
        $this->load->model('RegistroModel','registro');
        $this->load->model('LoginModel','login');
	}

    public function loja(){
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar2');
        $data['produto']= $this->produto->getAllProduto();
        $this->load->view('loja/produtosemfileira',$data);
        $this->load->view('component/footer');
        $this->load->view('component/rodape');
    }

    public function detalhes(){
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar2');
        $data['produto']= $this->produto->getProduto();
        $this->load->view('loja/detalhes',$data);
        $this->load->view('component/footer');
        $this->load->view('component/rodape');
    }

    public function register(){
        $tmp = $this->session->userdata('usuario');
        $acesso = $tmp['acesso'];
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');
        $this->registro->register();
        if($acesso == 1){
        $this->load->view('registrousuarios/formregister',null);
        $this->load->view('component/footer');
        }else{
        $this->load->view('errors/errodeacesso');    
            }   
        $this->load->view('component/rodape');
    }

    public function gerenciaProduto(){
        $tmp = $this->session->userdata('usuario');
        $acesso = $tmp['acesso'];
        $this->load->helper('url');
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');
        if($acesso == 1){
        $data['produto']= $this->produto->getAllProdutoEdita();
        $this->load->view('loja/produtosemfileira',$data);
        $this->load->view('loja/formproduto',null);
        $this->load->view('component/footer');
        }else{
        $this->load->view('errors/errodeacesso');    
            }   
        $this->load->view('component/rodape');
    }

    public function login(){ //função para usuario logar no sistema
        $this->load->helper('url');
        $this->load->view('component/cabecalho'); 
        $this->login->validate();
        $this->load->view('registrousuarios/formlogin', null);
        $this->load->view('component/rodape');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Games/loja');
    }

    function cadastraProduto(){
        $this->produto->cadastraProduto();
        //$this->portfolio->do_upload();
        redirect ('Games/register');
    }
    //pagina responsavel somente pela atualização de informações da tabela portfoliomodal, redireciona a pagina de administracao logo apos
        function editarProduto($id=0){
        $this->produto->editaProduto($id);
        redirect ('Games/register');


    }
	//pagina responsavel somente pela exclusão de informações da tabela conteudo, redireciona a pagina de administracao logo apos
    function deletarProduto($id=0){
    $this->produto->deletaProduto($id);
    redirect('Games/register');
    }     

}