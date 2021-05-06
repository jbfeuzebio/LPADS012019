<?php
defined('BASEPATH') OR exit('No direct script access allowed');//impede o acesso ao arquivo diretamente
class Registro{
    
    private $db;
    
    public function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }
    
    //insere o usuario na tabela login
    public function register($data){
        $auxquery['email']= $data['email'];
        $this->db->where($auxquery);
        $query = $this->db->get('login');

        if($query->num_rows() > 0){
        return null;
        }else{ 
        $aux['nome'] = $data['nome'];
        $aux['email']= $data['email'];
        $aux['senha']= md5($data['senha']);
        $aux['acesso'] = $data['acesso'];
        $this->db->insert('login',$aux);
        return $this->db->insert_id();
    }
    }
}

?>