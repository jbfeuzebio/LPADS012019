<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'libraries/Produto.php';

class ProdutoModel extends CI_model{

    public function cadastra_produto(){

        if(sizeof($_POST) == 0)return;

        $this->form_validation->set_rules('categoria_produto', 'Categoria', 'required');
        $this->form_validation->set_rules('qtd_produto_estoque', 'Quantidade', 'required');
        $this->form_validation->set_rules('nome_prod', 'Nome', 'required');
        $this->form_validation->set_rules('descricao_produto', 'Descricao', 'required');
        $this->form_validation->set_rules('preco', 'Preco', 'required');

        if($this-> form_validation-> run()){
            echo"<script language='javascript' type='text/javascript'>alert('form validado');</script>";
            $dados = $this -> input -> post();
            $produto = new Produto();
            $resultado = $produto -> insere_produto($dados);
        }else {
            echo"<script language='javascript' type='text/javascript'>alert('form NAO validado');</script>";
        }

    }
}
?>