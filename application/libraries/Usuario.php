<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario{

private 
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
        $query = $this->db->get_where('usuarios',array('email' = $auxquery));

        if($query->num_rows() > 0){
            return null;
            }else{ 
            $aux['nivel_hierarquico'] = $data['nivel_hierarquico'];
            $aux['nome'] = $data['nome'];
            $aux['email']= $data['email'];
            $aux['senha']= md5($data['senha']);
            $this->db->insert('usuarios',$aux);
            return $this->db->insert_id();
    }

    public function login(){}


}



?>