<?php

    class Imagem{

        private $db;
        private $id_imagem;
        private $nome_imagem;
        private $tamanho_imagem;
        private $id_produto;

        public function __construct($id_imagem = null, $nome_imagem = null, $tamanho_imagem = null, $id_produto = null){
            $this->$id_imagem = $id_imagem;
            $this->$nome_imagem = $nome_imagem;
            $this->$tamanho_imagem = $tamanho_imagem;
            $this->$id_produto = $id_produto;
            
          
            $ci = get_instance();
            $this->db = $ci->db;
        }

        public function insere_imagem_produto($dados_imagem){
            $this->db->insert('imagensprodutos', $dados_imagem);
            $id_imagem = $this->db->insert_id();
            return $id_imagem;
        }

        public function get_todas_imagens_produtos(){
            $query_imagens_produto = $this->db->get('imagensprodutos');
            $lista_imagens_produtos = $query_imagens_produto -> result();
            return $lista_imagens_produtos;
        }
    }

?>