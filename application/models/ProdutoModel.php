<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'libraries/Produto.php';
include APPPATH . 'libraries/Imagem.php';

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
            $dados_produto = $this -> input -> post();
            $produto = new Produto();
            $id_produto = $produto -> insere_produto($dados_produto);
          
            $dados_imagem = array (
                'id_produto' => $id_produto,
                'nome_imagem' => './imagens/produtos'.$_FILES['imagem']['name'],
                'tamanho_imagem' => $_FILES['imagem']['size'],
            );
            $config = array(
                'upload_path'   => './imagens/produtos',
                'allowed_types' => 'gif|jpg|jpeg',
            );
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('imagem');
            $imagem = new Imagem();
            $id_imagem = $imagem -> insere_imagem_produto($dados_imagem);
            if ($id_imagem != null || $id_produto != null){
                echo"<script language='javascript' type='text/javascript'>alert('inserido');</script>";    
            }
        }else {
            echo"<script language='javascript' type='text/javascript'>alert('form NAO validado');</script>";
        }

    }
}
?>