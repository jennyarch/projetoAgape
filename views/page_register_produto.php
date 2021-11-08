<?php 
     include_once 'C:\xampp\htdocs\ProjetoAgape\public\dependencies.php';
?>

<h2 class="text-center">
    Pagina de registro 
</h2>

<form method="POST" action="../controller/insert_costumer_produtos.php">
    <div class="container">
        <div class="form-row">
             <div class="col-md-4">
                 Código: 
                 <input class="form-control" type="text" disabled placeholder="000" name="id">
             </div>
             <div class="col-md-4">
                 Nome do Produto: 
                 <input class="form-control" type="text" name="produto" required>
             </div>
             <div class="col-md-4">
                 Quantidade: 
                 <input class="form-control" type="text" name="quantidade" required>
             </div>
             
             <div class="col-md-12" >
                 Observação : 
                 <input class="form-control" type="textarea" name="descricao" ><br>
             </div>
             <div class="col-md-4">
                <button class="btn btn-primary btn-lg">
                    Inserir Produto <i class="fa fa-tags"></i>
                </button>
             </div>
             <div class="col-md-8 text-right">
                <a href="./menuPrincipal.php" class="btn btn-success btn-lg"> Voltar <i class="fa fa-arrow-circle-left"></i></a>
             </div>
        </div>
    </div>
</form>