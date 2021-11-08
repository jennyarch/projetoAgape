<!DOCTYPE html>

<?php 

include_once 'C:\xampp\htdocs\ProjetoAgape\public\dependencies.php';
include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
include_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager_Produto.php';
include_once 'C:\xampp\htdocs\ProjetoAgape\public\helper.php';

    $manager = new ManagerProduto();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/clientes.css" type="text/css"/>

    <title>Produtos</title>

</head>
<body>
    <div class="container">
    <form class="form-horizontal">
                    <div class="form-group d-flex justify-content-start flex-column">
                        <label>
                            <h3>Produtos</h3>
                        </label>
                        <p class="text-primary">Cadastrar, consultar, alterar e excluir um produto</p>
                    </div>
                    <div class="form-inline d-flex justify-content-end justify-content-between">
                        <a href="./page_register_produto.php" class="btn btn-primary btn-xs">
                            Novo <i class="fa fa-user-plus"></i>
                        </a>
                        <a href="./menuPrincipal.php" class="btn btn-primary btn-xs d-flex align-items-end">
                            <i class="fa fa-home"></i>
                        </a>
                    </div>
            
        </form>
			<br>
            <form action="">
                <div class="form-inline">
                    <label for="filter">Filtrar por: código</label>
                    <input type="text" name="filter" class="form-control">
                    <label for="">Produto:</label>
                    <input type="text" class="form-control">
                    <label for="">CNPJ:</label>
                    <input type="text" class="form-control">
                                    
                        <a href="" class="btn btn-default"> 
                        <i class="fa fa-search"></i>
                        </a>
                        <a href="" class="btn btn-default"> 
                        <i class="fa fa-ban"></i>
                        </a>
                </div>
          <br>
            </form>
        <div class="table-responsive overflow-auto" style="height: 300px;" >
            <table class="table table-hover" style="height: 200px;">
                <thead class="thead">
                    <tr>
                        <th>Código</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Descrição</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody class="fa-xs">
                    <?php
                        foreach ($manager->listCostumer('produtos') as $c){ 
                    ?>
                    <tr>
                            <td><?= $c['id']; ?></td>
                            <td><?= $c['produto']; ?></td>
                            <td><?= $c['quantidade']; ?></td>
                            <td><?= $c['descricao']; ?></td>
                        <td>
                            <form method="POST" action="page_update_produto.php">
                            <input type="hidden" name="id" value="<?= $c['id']?>">
                                <button class="btn btn-warning btn-sml">
                                    <i class="fa fa-user-edit"></i>
                                </button>
                            </form>
                            
                        </td>
                        <td>
                            <form method="POST" action="../controller/delete_costumer_produtos.php" onclick="return confirm ('Você deseja excluir essa informação')">
                            <input type="hidden" name="id" value="<?= $c['id'] ?>">    
                                <button class="btn btn-danger btn-sml">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>  
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>