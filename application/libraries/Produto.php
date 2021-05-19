<?php

    class Produto{
        
        private $db;
        private $id_produto;
        private $categoria_produto;
        private $qtd_produto_estoque;
        private $nome_prod;
        private $descricao_produto;
        private $preco;

        public function __construct($id_produto = null, $categoria_produto = null, $qtd_produto_estoque = 0, $nome_prod = null, $descricao_produto = null, $preco = null){
            $this->$id_produto = $id_produto;
            $this->$categoria_produto = $categoria_produto;
            $this->$qtd_produto_estoque = $qtd_produto_estoque;
            $this->$nome_prod = $nome_prod;
            $this->$descricao_produto = $descricao_produto;
            $this->$preco = $preco;

            $ci = get_instance();
            $this->db = $ci->db;
        }

        public function insere_produto($dados_produto){
            $this->db->insert('produtos', $dados_produto);
            return $this->db->insert_id();
        }

        public function get_todos_produtos($lista_imagens_produtos){
            $html = '';
            $res = $this->db->get('produtos');
            $produtos = $res -> result();
            foreach ($produtos as $produto){
                $id_prod = $produto->id_produto;
                foreach($lista_imagens_produtos as $imagem){
                    $id_produto_imagem = $imagem->id_produto;
                    if($id_produto_imagem == $id_prod){
                        $produto -> nome_imagem = $imagem->nome_imagem;
                    }
                }
                $html .= $this->exibe_produto($produto);
            }
            return $html;
        }

        public function exibe_produto($produto){
            $html = '
                    <img src="'.base_url($produto->nome_imagem).'" alt='.$produto->nome_imagem.' />
                    <br/>
                    <h5>'.$produto->nome_prod.'</h5>
                    <h5>'.$produto->descricao_produto.'</h5> 
                    ' ;
            return $html;
        }

    }




?>