<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>




 

    <script type="text/javascript" src="<?= base_url('assets/js/tether.min.js') ?>"></script>

    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js') ?>"></script>
    <script>
   $(function editar(){
    $('div.formeditar').hide();
    $('button#editarbutton').click(function(){
        $(this).siblings('div.formeditar').slideToggle();
        $('button#deletarbutton').hide();
        if($(this).text() == "Editar"){
            $(this).text("Fechar");
        }else{
            $(this).text("Editar");
            $('button#deletarbutton').show();
        }
    });
});

$(function cadastrar(){
    $('div.formcadastrar').hide();
    $('button#cadastrarbutton').click(function(){
        $(this).siblings('div.formcadastrar').slideToggle();
        if($(this).text() == "Cadastrar"){
            $(this).text("Fechar");
        }else{
            $(this).text("Cadastrar");
        }
    });
});


    </script>

</body>

</html>