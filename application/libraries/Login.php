<?php
defined('BASEPATH') OR exit('No direct script access allowed');//impede o acesso ao arquivo diretamente
class Login{
    private $db;
    
    public function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }
    
    
    public function validate ($data){ //variavel data tem as informaçoes ('email' => 'o que o usuario digitar', 'senha' => '')
        $aux['email'] = $data['email'];
        $aux['senha']= md5($data['senha']); 
        $this->db->where($aux);  
        $query = $this->db->get('login');
        if($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            return $row;

        }
    }else{
             return null;
        }
    }

}

?>