<?php


class Produto{

    private $db;
    private $nome;
    private $preco;
    private $detalhes;
    private $categoria;
    private $nomeimagem;
    
   public function __construct($nome=null, $preco=null, $detalhes=null, $categoria=null, $nomeimagem=null ) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->detalhes = $detalhes;
        $this->categoria = $categoria;
        $this->nomeimagem= $nomeimagem;
        
        $ci = & get_instance();
        $this->db = $ci->db;
   }

   public function getAllProduto(){
    $html = '';
    $res = $this ->db->get('produtos');
    $produtos = $res -> result();
     
    foreach ($produtos AS $produto){
        $html .= $this->getRowProduto($produto);
        
    }
    return $html;

    }

    public function getAllProdutoEdita(){
        $html = '';
        $res = $this ->db->get('produtos');
        $produtos = $res -> result();
         
        foreach ($produtos AS $produto){
            $html .= $this->getRowProdutoEdita($produto);
            
        }
        return $html;
      
      }

      

    public function getRowProduto($produto){
        $html = '
        <div class="card ml-4" style="width: 299px;">
        <img class="card-img-top mt-2" src="'.base_url("img/jogos/$produto->nomeimagem.jpg").'" alt="'.$produto->nomeimagem.'">
        <div class="card-body">
        <center>
          <h5 class="card-title">'.$produto->nome.'</h5>
          <p class="card-text"><b>R$'.$produto->preco.'</b></p>
        </center>

          <center><a href="'.base_url("Games/deletarProduto/".$produto->id).'" class="btn btn-danger">Comprar</a></center>
        </div>
        </div>  
        ';
        return $html;
    }

    public function getProduto($id){
        $cond ['id']= $id;
        $res = $this-> db ->get_where('produto, $cond');
        return $res-> row(); //retorna o objeto resultante dessa consulta
        }

    public function getRowProdutoEdita($produto){
        $html = '
        <div class="card ml-4" style="width: 299px;">
        <img class="card-img-top mt-2" src="'.base_url("img/jogos/$produto->nomeimagem.jpg").'" alt="Card image cap">
        <div class="card-body">
        <center>  
          <h5 class="card-title">'.$produto->nome.'</h5>
          <p class="card-text">'.$produto->preco.'</p>
        </center>


      
        <button  class="btn btn-danger btn-lg mt-3"  " id="editarbutton">Editar</button>
          <div class="formeditar">
          <div class="card mt-4">
          <div class="card-header red lighten-1 white-text">
          <center>Formulario de edição</center>
          </div>
          <div class="container mb-4">
        
          <form class="col-md-14 mx-auto" method="POST" action="'.base_url("Games/EditarProduto").' ">
          
          <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Titulo</label>
                    <input class="form-control" name="nome" type="text" placeholder="nome" value="'.$produto->nome.'">
                    </div>
                </div>
            
            <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Sobre</label>
                    <textarea class="form-control" name="detalhes"  placeholder="detalhes">'.$produto->detalhes.'</textarea>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
            <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Preço</label>
                    <input class="form-control" name="preco" type="text" placeholder="preço" value="'.$produto->preco.'">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Texto um</label>
                    <input class="form-control" name="categoria" type="text" placeholder="categoria" value="'.$produto->categoria.'">
                    </div>
                </div>
            </div>
            </div>
                <div class="row">
                <div class="col-md-6">
            <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Subtitulo dois</label>
                    <input class="form-control" name="nomeimagem" type="text" placeholder="estoque" value="'.$produto->nomeimagem.'">
                    </div>
                </div>
            </div>
            <input  type=hidden name="id" value="'.$produto->id.'"></input>
            </div>
            
            <div class="text-center">
            <button class="btn btn-danger">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
          </div>
            </form>
            </div>
            </div>
          
          </div>
          <button  class="btn btn-red btn-lg mt-3 " id="deletarbutton"><a href="'.base_url("Games/deletarProduto/".$produto->id).'">Deletar</a></button>
     
    

        </div>
        </div>

        
        ';
        return $html;
    }  

      

    public function insere(){
        $sql = "INSERT INTO produtos SET nome = '$this->nome', preco = '$this->preco', detalhes = '$this->detalhes', categoria = '$this->categoria', nomeimagem = '$this->nomeimagem'" ;
        $this->db->query($sql);
    }
  
    public function edita($id){
        $sql = "UPDATE produtos SET nome = '$this->nome', preco = '$this->preco', detalhes = '$this->detalhes', categoria = '$this->categoria', nomeimagem = '$this->nomeimagem' WHERE id =$id" ;
        $this ->db ->query ($sql);
    }

    public function  delete($id){
        $this->db->delete('produtos',array('id'=> $id) );
      }

}