
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Agape</title>
    <link rel="stylesheet" href="../assets/css/menu.css" type="text/css"/>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'/>
</head>
<body>
<header class="cabecalho">
    <img class="logo" src="../assets/img/logo_agape.png" alt="Logo"/>
</header>
<div class="nav_menu">
    <div class="menu">
        <div class="item_menu"><a href="index.html"></a><i class="fi fi-rr-align-justify"></i></div>
        <hr class="linha-horizontal"></hr>
        <div class="item"><a href="./menuPrincipal.php"><i class="fi fi-rr-home"></i>Início</a></div>
        <hr class="linha-horizontal"></hr>
        <div class="item"><a class="sub-btn"><i class="fi fi-rr-caret-down"></i>Cadastro</a>
            <div class="sub-menu">
                <a href="clientes.php" class="sub-item">Cliente</a>
                <a href="produtos.php" class="sub-item">Produto</a>
            </div>
        </div>
        <hr class="linha-horizontal"></hr>
        <div class="item"><a class="sub-btn" href="index.html"><i class="fi fi-rr-caret-down"></i>Pedido</a>
            <!-- <div class="sub-menu">
                <a href="index.html">Pedido</a>
            </div> -->
        </div>
        <hr class="linha-horizontal"></hr>
        <div class="item"><a class="sub-btn"><i class="fi fi-rr-caret-down"></i>Relatório</a>
            <div class="sub-menu">
                <a href="index.html">Cliente</a>
                <a href="index.html">Produto</a>
                <a href="index.html">Pedido</a>
            </div>
        </div>
        <hr class="linha-horizontal"></hr>
        <div class="item"><a class="sub-btn" href="index.php"><i class="fi fi-rr-caret-down"></i>Sair</a>
            <!-- <div class="sub-menu">
                <a href="index.php">Sair</a>
            </div> -->
        </div>

    </div>

</div>

<!-- <div class="menu-top">
    <div class="menu-paragraph">
        <label class="">Clientes</label>
        <p></p>
        <p>Cadastrar, consultar, alterar e excluir um cliente</p>
    </div>
    <form class="acessar-tabela-cliente">
        <button type="submit" formaction="./formularioCadastro.php"><i class="fi fi-rr-add"></i> Novo</button>
        <label>Filtar por Código: </label>
        <input type="text" class="input_filter"></input>
        <label>Cliente: </label>
        <input type="text" class="input_filter"></input>
        <label>CNPJ: </label>
        <input type="text" class="input_filter"></input>
        <button type="submit" class="button_filter" style="width: 50px; border-radius: 20px;"><i class="fi fi-rr-filter" style="width: 10px; height: 10px; text-align: center;"></i></button>
    </form>
</div> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script language="javascript">
        $('.sub-menu').hide();
        $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle("fast");
        });
    </script>
</body>
</html>