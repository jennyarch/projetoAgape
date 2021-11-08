<?php 
     include_once 'C:\xampp\htdocs\ProjetoAgape\public\dependencies.php';
?>

<h2 class="text-center">
    Cadastro do Cliente 
</h2>

<form method="POST" action="../controller/insert_costumer.php">
    <div class="container">
        <div class="form-row">
             <div class="col-md-4">
                 Código: 
                 <input class="form-control" type="" disabled placeholder="000" name="id">
             </div>
             <div class="col-md-6">
                 Nome: 
                 <input class="form-control" type="text" name="nome" required>
             </div>
             <div class="col-md-3">
                 CNPJ: 
                 <input class="form-control" type="text" name="cnpj" required>
             </div>
             <div class="col-md-3">
                 RG: 
                 <input class="form-control" type="text" name="rg" required>
             </div>
             <div class="col-md-3">
                 Nascimento: 
                 <input class="form-control" type="date" name="dt_nascimento" >
             </div>
             <div class="col-md-6">
                 Endereço: 
                 <input class="form-control" type="text" name="endereco" required>
             </div>
             <div class="col-md-6">
                 Complemento: 
                 <input class="form-control" type="text" name="complemento" required>
             </div>
             <div class="col-md-3">
                 Bairro: 
                 <input class="form-control" type="text" name="bairro" required>
             </div>
             <div class="col-md-3">
                 CEP: 
                 <input class="form-control" type="text" name="cep" required>
             </div>
             <div class="col-md-3">
                 Cidade: 
                 <input class="form-control" type="text" name="cidade" required>
             </div>
             <div class="col-md-3">
                 UF: 
                 <input class="form-control" type="text" name="uf" required>
             </div>
             <div class="col-md-6">
                 Telefone: 
                 <input class="form-control" type="text" name="telefone" required>
             </div>
             <div class="col-md-6">
                 Celular: 
                 <input class="form-control" type="text" name="telefone" required>
             </div>
             <div class="col-md-12">
                 Observação : 
                 <input class="form-control" type="text" name="descricao" ><br>
             </div>
             <div class="col-md-4">
                <button class="btn btn-primary btn-lg">
                    Inserir Cliente <i class="fa fa-user-plus"></i>
                </button>
             </div>
             <div class="col-md-8 text-right">
                <a href="./menuPrincipal.php" class="btn btn-success ntb-lg"> Voltar <i class="fa fa-arrow-circle-left"></i></a>
             </div>
        </div>
    </div>
</form>