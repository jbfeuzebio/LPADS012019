<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark elegant-color lighten-4">
<a class="navbar-brand" href="#"><img src="<?= base_url('img/controle.png') ?>" style="width:45px; height:45px" alt="brand"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('Games/loja') ?>">Home
      <span class="sr-only">(current)</span>
    </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Games/register') ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Games/gerenciaProduto') ?>">Produtos</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item avatar dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <img src="<?= base_url('img/avatar.png') ?>" class="rounded-circle z-depth-0 " style="width:50px; height:50px" alt="avatar image">
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
        <a class="dropdown-item" href="<?= base_url('Games/logout') ?>">Logout</a>
      </div>
    </li>
  </ul>
  </div>
</nav>
<!--/.Navbar -->