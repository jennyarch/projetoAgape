<?php

include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
include_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)){/* Se existir o Id ou se náo estiver vazio */
    $manager->deleteCostumer('clientes', $id);
    

    header("Location: ../views/clientes.php?costumer_delete");
}