<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <header>
    </header>
    <form method="POST" action="<?= base_url('ControllerLoja/editar_usuario') ?>">
        
        <input type="text" id="Nome" name="nome" placeholder="nome" value="<?= $usuario_logado->get_nome()?>">
 
        <input type="text" id="email" name="email" placeholder="Email" value="<?= $usuario_logado->get_email()?>">
   
        <input type="hidden"   name="nivel_hierarquico" value="<?= $usuario_logado->get_nivel_hierarquico()?>">

        <input type="hidden"  name="id_usuario" value="<?= $usuario_logado->get_id_usuario()?>">



        <button >Registrar</button>

    </form>

    <a href="<?= base_url('ControllerLoja/deletar_usuario') ?>">deletar usuario</a>
</body>
</html>