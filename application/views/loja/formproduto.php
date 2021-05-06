<!-- Form register --> 
<div>
  <button  class="btn btn-danger btn-lg  " id="cadastrarbutton">Cadastrar</button>
  <div class="formcadastrar">
<div class="container mt-5 ">
    
    <div class="row">
        
    <form method="POST" class="col-md-6 mx-auto mt-5" action="<?= base_url('Games/cadastraProduto') ?>">
    <p class="h5 text-center mb-4">Cadastro de Produtos</p>

    <div class="md-form">
        <input type="text" id="Nome" name="nome" class="form-control" placeholder="Nome">
    </div>
    <div class="md-form">
        <input type="text" id="preco" name="preco" class="form-control" placeholder="preco">
    </div>

    <div class="md-form">
        <input type="text" id="detalhes" name="detalhes" class="form-control" placeholder="detalhe">
    </div>
        <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="categoria" value="jogo">
  <label class="custom-control-label" for="defaultInline1">Jogo</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="categoria" value="acessorio">
  <label class="custom-control-label" for="defaultInline2">Acessorio</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="categoria" value="console">
  <label class="custom-control-label" for="defaultInline3">Console</label>
  </div>
  <div class="md-form">
  <input type="text" class="form-control"  name="nomeimagem" placeholder="nome da imagem">
  </div>  
<br />

    <div class="text-center">
        <button class="btn btn-danger">Registrar</button>
    </div>

    </form>
<!-- Form register -->
        
    </div>
    
</div>
</div>
</div>