<div class="container mt-5 ">
    
    <div class="row">
        
<form method="POST" class="col-md-6 mx-auto mt-5" action="<?= base_url('Games/login') ?>">
    <div class="card col-md-12 mx-auto mt-6">
    <center><h4><b>Login</b></h4></center>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
    </div>
        <div class="text-center">
            <button class="btn btn-info">Login</button>
        </div>
        </div>
</form>

        
</div>
    </div>
