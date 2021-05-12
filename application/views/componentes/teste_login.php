<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <header>
    </header>
    <form method="POST" action="<?= base_url('ControllerLoja/login_usuario') ?>">
 
        <input type="text" id="email" name="email" placeholder="Email">

        <input type="password" id="senha" name="senha" placeholder="Senha">
   
        <input type="hidden" class="custom-control-input"  name="nivel_hierarquico" value="0">

        <button >Registrar</button>

    </form>
</body>
</html>