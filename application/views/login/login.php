<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content ="width=device-width, initial-scale=1" />
      
        <link rel="stylesheet" href="<?= base_url('assets/login/login.css') ?>" >
        <link href='https://fonts.googleapis.com/css?family=Yellowtail:400' rel='stylesheet' type='text/css'>
        <title>Loja X</title>
    </head>
    <body>
        <header>
        </header>
    <br/>
        <div class="containerLogin">
                    <h1>LojaX</h1>
                    <img  class ="img" src ="<?= base_url('imagens/loja/icone2.svg') ?>" alt="logoloja" />
            <br />
                <form method="POST" action="<?= base_url('ControllerLoja/login_usuario')?>">
                    <div class="containerForm">
                        <input type="text" id="email" name="email" placeholder="Email: ">
                    <br />
                        <input type="password" id="senha" name="senha" placeholder="Senha: ">
                    <br />
                        <input type="hidden" class="custom-control-input"  name="nivel_hierarquico" value="0">
                    </div>
                    <div class="containerButton">
                        <button id="botaoLogar" type="submit">Logar</button><a href="<?= base_url('ControllerLoja/cadastrar_usuario')?>"><button id="botaoCadastrarse" type="button">Cadastrar-se</button></a>
                    </div>
                </form>
           
        </div> 
</body>
</html>