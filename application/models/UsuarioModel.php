<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include APPPATH . 'libraries/Usuario.php';

class UsuarioModel extends CI_model{

    public function validar_login(){

        if(sizeof($_POST) == 0)return;
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required');

        if($this-> form_validation->run()){
            $dados = $this -> input ->post();
            $usuario = new Usuario();
            $usuario_logado = $usuario -> login($dados);

            if($usuario_logado !== null){
                $this -> session-> set_userdata('usuario', $usuario_logado);
                $usuario_logado = $this->session->user_data('usuario');
                $nivel_hierarquico = $usuario_logado['nivel_hierarquico'];
                if ($nivel_hierarquico === 55){
                    
                }if ($nivel_hierarquico == 0) {
                    
                }else {

                }
            }else {
                echo"<script language='javascript' type='text/javascript'>alert('Usuario ou senha incorreto!')</script>";
                //usuario ou senha incorreta
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Algum campo esta vazio... tente novamente')</script>";
        }
    }

    public function registrar_usuario(){

        if(sizeof($_POST) == 0)return;
            $this->form_validation->set_rules('nome', 'Nome', 'required|min_length[2]|max_length[25]');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('senha','Senha','required|min_length[3]|max_length[16]');
            $this->form_validation->set_rules('confirma_senha','Confirma Senha','required|matches[senha]');
            $this->form_validation->set_rules('nivel_hierarquico','Nivel_Hierarquico','required|numeric');

        if($this->form_validation->run()){
            //OK os dados foram enviados corretamente
                $dados = $this->input->post();
                $usuario = new Usuario();
                $usuario_cadastrado = $usuario->registrar($dados);
                if($usuario_cadastrado != null){
                echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com Sucesso');</script>";
            }
            else{
                echo"<script language='javascript' type='text/javascript'>alert('Email já cadastrado');</script>";
            }
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('preencha corretamente');</script>";
    }
    }


}

?>