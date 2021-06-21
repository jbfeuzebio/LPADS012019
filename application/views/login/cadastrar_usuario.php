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
                <form method="POST" action="<?= base_url('ControllerLoja/cadastrar_usuario') ?>">
                    <div class="containerFormCadastro">
                    <input type="text" id="nome" name="nome" placeholder="Nome: ">
                        <br/>
                        <input type="text" id="email" name="email" placeholder="Email: ">
                    <br />
                        <input type="password" id="senha" name="senha" placeholder="Senha: ">
                    <br />
                        <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Confirmar senha: ">
                    <br />
                        <input type="hidden" class="custom-control-input"  name="nivel_hierarquico" value="0">
                    </div>
                    <div class="containerButton">
                        <button id="botaoCadastrarse"  type="submit">Cadastrar-se</button><button id="botaoLogar" type="button" onclick="window.history.go(-1)">Voltar</button>
                    </div>
                </form>
           
        </div>
    <br/>  
</body>
</html>