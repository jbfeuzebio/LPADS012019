<?php
include APPPATH . 'libraries/Registro.php';
class RegistroModel extends CI_Model{

    public function register(){    
        if(sizeof($_POST)==0)return;
    
        $this->form_validation->set_rules('nome','Nome','required|min_length[2]|max_length[255]');   //regras para os campos do formulario
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('senha','Senha','required|min_length[3]|max_length[16]');
        $this->form_validation->set_rules('confirma_senha','Confirma Senha','required|matches[senha]');
    
        if($this->form_validation->run()){
        //OK os dados foram enviados corretamente
            $data = $this->input->post();
            $login = new Registro();
            $user = $login->register($data);
            if($user != null){
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com Sucesso');</script>";
        }
        else{
            echo"<script language='javascript' type='text/javascript'>alert('Email já cadastrado');</script>";
        }
}
}
}
?>