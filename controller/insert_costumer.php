<?php

include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
require_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager.php';

$manager = new Manager();
$data = $_POST;


if(isset($data) && !empty($data)){
    $manager->insertCostumer('clientes', $data);
    

    header("Location: ../views/clientes.php?costumer_add_success");
}