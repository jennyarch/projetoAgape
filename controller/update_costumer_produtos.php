<?php

include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
include_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager_Produto.php';

$manager = new ManagerProduto();

$update = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $manager->updateCostumer("produtos", $update, $id);

    header("Location: ../views/produtos.php?costumer_update");
}