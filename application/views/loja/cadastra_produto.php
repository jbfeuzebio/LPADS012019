    <div class="containerFormProd">
        <h1>Cadastrar Produto</h1>  
        <form enctype="multipart/form-data" action="<?= base_url('ControllerLoja/cadastrar_produto')?>" method="POST">
            <div class="containerInputProd">
                <input type="text" id="Nome_prod" name="nome_prod" placeholder="Nome Produto:">
            <br />
                <input type="text" id="Descricao_prod" name="descricao_produto" placeholder="Descrição Produto:">
            <br />
            <select id="Categoria_prod" name="categoria_produto" >
                <option value="" selected disabled hidden>Categorias</option>
                <option value="jogos">Jogos</option>
                <option value="consoles">Consoles</option>
                <option value="acessorios">Acessorios</option>
            </select>
            <br />
                <input type="number" step="0.01" id="Preco" name="preco" placeholder="Preço: ">
                <input type="number" id="Qtd_prod" name="qtd_produto_estoque" placeholder="Estoque:">
            <br />
                <input type="file" name="imagem" accept="image/*">
            <br />
            </div>
            <div class="containerButtonProd">
                <button id="Registrar">Registrar</button>
                <input type="reset" id="Resetar"></button>
            </div>
        </form>
    </div>