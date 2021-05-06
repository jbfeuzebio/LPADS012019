<?php


include APPPATH . 'libraries/Produto.php';

class ProdutoModel extends CI_Model{

    //instancia um objeto com os atributos passados pelo metodo post, retorna falso se o post tiver vazio, e encaminha o objeto para a função Insere
    public function cadastraProduto(){
        if(sizeof($_POST) == 0) return false;

         $nome        = $this->input->post('nome'); 
         $preco         = $this->input->post('preco');
         $detalhes         = $this->input->post('detalhes');
         $categoria       = $this->input->post('categoria');
         $nomeimagem       = $this->input->post('nomeimagem');
              
         $produto = new Produto($nome, $preco, $detalhes, $categoria, $nomeimagem);
         $produto->insere();
        
         return true;
        }

        
    //instancia um objeto com os atributos passados pelo metodo post, retorna falso se o post tiver vazio, e encaminha o objeto para a função edita
    public function editaProduto(){
        if(sizeof($_POST) == 0) return false;
                
                $id         = $this->input->post('id');
                $nome       = $this->input->post('nome'); 
                $preco      = $this->input->post('preco');
                $detalhes   = $this->input->post('detalhes');
                $categoria  = $this->input->post('categoria');
                $nomeimagem    = $this->input->post('nomeimagem');

                $produto = new Produto($nome, $preco, $detalhes, $categoria, $nomeimagem);
                $produto->edita($id);

                 return true;
    }

    //instancia um objeto e o retorna dentro da função getAllProduto
    public function  getAllProdutoEdita(){
        $produto = new Produto();
        return $produto->getAllProdutoEdita();
    }

    //instancia um objeto e o retorna dentro da função getAllProduto
    public function  getAllProduto(){
        $produto = new Produto();
        return $produto->getAllProduto();
    }
    public function getProduto($id){
        $produto = new Produto();
        return $produto->getProduto($id);  
    }
    
    //instancia um objeto e o retorna dentro da função delete
    public function deletaProduto($id){
        $produto = new Produto();
        return $produto->delete($id);
    }

    public function getProdutoJogo($categoria){
        $sql = "SELECT * FROM produtos WHERE categoria = 'jogo'";
        $query  = $this->db->query($sql);
        return $query->row();
    }

    public function getProdutoAcessorio($categoria){
        $sql = "SELECT * FROM produtos WHERE categoria = 'acessorio'";
        $query  = $this->db->query($sql);
        return $query->row();
    }

    public function getProdutoConsole($categoria){
        $sql = "SELECT * FROM produtos WHERE categoria = 'console'";
        $query  = $this->db->query($sql);
        return $query->row();
    }
    
}