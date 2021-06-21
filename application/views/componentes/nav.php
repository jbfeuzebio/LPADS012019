<nav id="navMobile">
        <button id="botaoMobile"><span id="desenhoBotao"></span>
        </button>
            <ul class="menu">
                <li><a href="<?= base_url('ControllerLoja/cadastra_produto')?>">Jogos</a></li>
                <li><a>Consoles</a></li>
                <li><a>Acessorios</a></li>
                <li><input type="text" placeholder="Pesquise algum produto "/></li>    
                <li><a href="<?= base_url('ControllerLoja/cadastrar_usuario')?>">Cadastro</a></li>
                <li><a href="<?= base_url('ControllerLoja/login_usuario')?>">Login</a></li>
            </ul>
    </nav>
</header>