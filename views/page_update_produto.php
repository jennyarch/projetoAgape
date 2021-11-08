<?php 
     include_once 'C:\xampp\htdocs\ProjetoAgape\public\dependencies.php';
     include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
     include_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager_Produto.php';

     $m = new ManagerProduto();

     $id = $_POST['id'];
?>

<h2 class="text-center">
    Pagina de registro 
</h2>

<form method="POST" action="../controller/update_costumer_produtos.php">
    <div class="container">
        <div class="form-row">

            <?php foreach($m->getInfo('produtos', $id) as $c) { ?>
             <div class="col-md-4">
                 Código: 
                 <input class="form-control" type="text" disabled placeholder="0001" name="id" value="<?= $c['id']?>">
             </div>
             <div class="col-md-4">
                 Nome do Produto: 
                 <input class="form-control" type="text" name="produto" required value="<?= $c['produto']?>">
             </div>
             <div class="col-md-4">
                 Quantidade: 
                 <input class="form-control" type="text" name="quantidade" required value="<?= $c['quantidade']?>">
             </div>
             
             <div class="col-md-12" >
                 Observação : 
                 <input class="form-control" type="textarea" name="descricao" value="<?= $c['descricao']?>" ><br>
             </div>
             <input type="hidden" name="id" value="<?= $c['id']?>"/>
             <?php } ?>
             <div class="col-md-4">
                <button class="btn btn-primary btn-lg">
                    Alterar Produto <i class="fa fa-tags"></i>
                </button>
             </div>
             <div class="col-md-8 text-right">
                <a href="./menuPrincipal.php" class="btn btn-success btn-lg"> Voltar <i class="fa fa-arrow-circle-left"></i></a>
             </div>
        </div>
    </div>
</form>