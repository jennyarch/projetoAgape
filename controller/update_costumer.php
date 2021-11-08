<?php

include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
include_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager.php';

$manager = new Manager();

$update = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $manager->updateCostumer("clientes", $update, $id);

    header("Location: ../views/clientes.php?costumer_update");
}