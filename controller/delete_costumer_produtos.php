<?php

include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
require_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager_Produto.php';

$manager = new ManagerProduto();

$id = $_POST['id'];

if(isset($id) && !empty($id)){/* Se existir o Id ou se náo estiver vazio */
    $manager->deleteCostumer('produtos', $id);
    

    header("Location: ../views/produtos.php?costumer_delete");
}