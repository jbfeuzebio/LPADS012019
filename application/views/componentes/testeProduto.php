<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <header>
    </header>
    <form method="POST" action="<?= base_url('ControllerLoja/cadastra_produto') ?>">
  
        <input type="text" id="Nome_prod" name="nome_prod" placeholder="Nome Produto">
 
        <input type="text" id="Categoria_prod" name="categoria_produto" placeholder="Categoria Produto">

        <input type="text" id="Descricao_prod" name="descricao_produto" placeholder="Descrição Produto">

        <input type="number" id="Preco" name="preco" placeholder="Preço">

        <input type="number" id="Qtd_prod" name="qtd_produto_estoque" placeholder="Quantidade produto estoque:">
   

        <button >Registrar</button>

    </form>

    <a href="<?= base_url('ControllerLoja/editar_usuario') ?>">editar usuario</a>
</body>
</html>