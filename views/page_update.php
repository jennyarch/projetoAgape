
<?php 
     include_once 'C:\xampp\htdocs\ProjetoAgape\public\dependencies.php';
     include_once 'C:\xampp\htdocs\ProjetoAgape\model\Conexao.php';
     include_once 'C:\xampp\htdocs\ProjetoAgape\model\Manager.php';

$m = new Manager();

$id = $_POST['id']; 
?>

<h2 class="text-center">
    Pagina de registro 
</h2>

<form method="POST" action="../controller/update_costumer.php">
    <div class="container">
        <div class="form-row">
            <?php foreach($m->getInfo('clientes', $id) as $c); { ?>
             <div class="col-md-4">
                 Código: 
                 <input class="form-control" type="" disabled placeholder="0001" name="id">
             </div>
             <div class="col-md-6">
                 Nome: 
                 <input class="form-control" type="text" name="nome" required value="<?= $c['nome']?>">
             </div>
             <div class="col-md-3">
                 CNPJ: 
                 <input class="form-control" type="text" name="cnpj" required value="<?= $c['cnpj']?>">
             </div>
             <div class="col-md-3">
                 RG: 
                 <input class="form-control" type="text" name="rg" required value="<?= $c['rg']?>">
             </div>
             <div class="col-md-3">
                 Nascimento: 
                 <input class="form-control" type="date" name="dt_nascimento" required value="<?= $c['dt_nascimento']?>">
             </div>
             <div class="col-md-6">
                 Endereço: 
                 <input class="form-control" type="text" name="endereco" required value="<?= $c['endereco']?>">
             </div>
             <div class="col-md-6">
                 Complemento: 
                 <input class="form-control" type="text" name="complemento" required value="<?= $c['complemento']?>">
             </div>
             <div class="col-md-3">
                 Bairro: 
                 <input class="form-control" type="text" name="bairro" required value="<?= $c['bairro']?>">
             </div>
             <div class="col-md-3">
                 CEP: 
                 <input class="form-control" type="text" name="cep" required value="<?= $c['cep']?>">
             </div>
             <div class="col-md-3">
                 Cidade: 
                 <input class="form-control" type="text" name="cidade" required value="<?= $c['cidade']?>">
             </div>
             <div class="col-md-3">
                 UF: 
                 <input class="form-control" type="text" name="uf" required value="<?= $c['uf']?>">
             </div>
             <div class="col-md-6">
                 Telefone: 
                 <input class="form-control" type="text" name="telefone" required  value="<?= $c['telefone']?>">
             </div>
             <div class="col-md-6">
                 Celular: 
                 <input class="form-control" type="text" name="telefone" required value="<?= $c['telefone']?>">
             </div>
             <div class="col-md-12">
                 Observação : 
                 <input class="form-control" type="text" name="descricao"  value="<?= $c['descricao']?>"><br>
             </div>
             
             <input type="hidden" name="id" value="<?= $c['id']?>"/>
             <?php } ?>
             <div class="col-md-4">
                <button class="btn btn-warning btn-lg">
                    Alterar Cliente <i class="fa fa-user-edit"></i>
                </button>
             </div>
             <div class="col-md-8 text-right">
                <a href="./menuPrincipal.php" class="btn btn-primary btn-lg"> Voltar <i class="fa fa-arrow-circle-left"></i></a>
             </div>
        </div>
    </div>
</form>