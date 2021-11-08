<?php

include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
require_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager_Produto.php';

$manager = new ManagerProduto();
$data = $_POST;


if(isset($data) && !empty($data)){
    $manager->insertCostumer("produtos", $data);

    header("Location: ../views/produtos.php?costumer_add_success");
}