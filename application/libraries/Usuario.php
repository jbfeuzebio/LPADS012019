<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario{
    private $db;
    private $nivel_hierarquico;
    private $nome;
    private $email;
    private $senha;

    public function __construct($nivel_hierarquico = null,$nome = null,$email = null, $senha = null){
        $this-> nivel_hierarquico = $nivel_hierarquico;
        $this-> nome = $nome;
        $this-> email = $email;
        $this-> senha = $senha;

        $ci = get_instance();
        $this->db = $ci->db;
    }

    public function registrar($dados){
        $auxquery['email'] = $dados['email'];
        $this->db->where($auxquery);
        $query = $this->db->get('usuarios');

        if($query->num_rows() > 0){
            return null;
            }else{ 
            $aux['nivel_hierarquico'] = $dados['nivel_hierarquico'];
            $aux['nome'] = $dados['nome'];
            $aux['email']= $dados['email'];
            $aux['senha']= md5($dados['senha']);
            $this->db->insert('usuarios',$aux);
            return $this->db->insert_id();
    }
}

    public function login($dados){
        $auxquey['email'] = $dados['email'];
        $auxquery['senha'] = md5($dados['senha']);
        $this->db->where($auxquery);
        $query = $this->db->get('usuarios');

        if($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            return $row;
        }
        }else{
             return null;
        }
    }

    public function validar_nivel($nivel,$usuario_logado){
       if ($usuario_logado['nivel_hierarquico'] != $nivel){
           return null;
       }
    }
    

}
?>