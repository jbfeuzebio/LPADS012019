<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario{
    private $db;
    private $nivel_hierarquico;
    private $nome;
    private $email;
    private $senha;
    private $id_usuario;

    public function __construct($nivel_hierarquico = null,$nome = null,$email = null, $senha = null, $id_usuario = null){
        $this-> nivel_hierarquico = $nivel_hierarquico;
        $this-> nome = $nome;
        $this-> email = $email;
        $this-> senha = $senha;
        $this-> id_usuario = $id_usuario;

        $ci = get_instance();
        $this->db = $ci->db;
    }

    public function get_nivel_hierarquico(){
        return $this->nivel_hierarquico;
    }

    public function get_nome(){
        return $this->nome;
    }
    
    public function get_email(){
        return $this->email;
    }
    
    public function get_senha(){
        return $this->senha;
    }

    public function get_id_usuario(){
        return $this->id_usuario;
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

    public function alterar($dados){
        $auxquery['id_usuario'] = $dados['id_usuario'];
        $this->db->where($auxquery);
        $this->db->update('usuarios', $dados);
        return true;
    }

    public function deletar($id){
        $this->db->delete('usuarios',array('id_usuario'=> $id));
        return true;
    }
    

}
?>