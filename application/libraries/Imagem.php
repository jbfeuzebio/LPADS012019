<?php

    class Imagem{

        private $db;
        private $id_imagem;
        private $nome_imagem;
        private $tipo_imagem;
        private $tamanho_imagem;
        private $imagem;
        private $id_produto;

        public function __construct($id_imagem = null, $nome_imagem = null, $tipo_imagem = null, $tamanho_imagem = null, $imagem = null, $id_produto = null){
            $this->$id_imagem = $id_imagem;
            $this->$nome_imagem = $nome_imagem;
            $this->$tipo_imagem = $tipo_imagem;
            $this->$tamanho_imagem = $tamanho_imagem;
            $this->$imagem = $imagem;
            $this->$id_produto = $id_produto;

            $ci = get_instance();
            $this->db = $ci->db;
        }
        
    }

?>