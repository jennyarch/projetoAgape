
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Agape</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="banner_agape">
                <img class="banner" src="../assets/img/banner_agape.png" alt="Banner Agape"></img>
            </div>
            <div class="login">
                    <div class="logo">
                        <img src="../assets/img/logo_agape.png" alt="Logo"></img>
                        <p>Sistemas e Tecnologia</p>
                    </div>
                    <form class="formulario" id="form" method="POST" >
                        <div class="usuario">
                            <label >Identificação do usuário: *</label>
                            <input type="text" id="usuario" name="nome" required="true"></input>
                        </div>

                        <div class="senha">
                            <label >Senha: *</label>
                            <input type="password" id="senha" name="senha" required="true" ></input>
                        </div>

                        <div class="check">
                            <label >Vizualizar</label>
                            <input type="checkbox" name="check" onclick="{mostrarSenha()}"></input>
                        </div>
                        
                        <div class="buttons">
                            <input type="submit" class="acessar" value="Acessar" id="acessar"></input>
                            <input type="submit" class="cancelar" value="Cancelar" id="cancelar" onclick=""></input>
                        </div>
                    </form>
<!--formaction="./menuPrincipal.php" -->

            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script language="javascript">
        /* function validar() */
        document.querySelector('#form').addEventListener('submit', function (validar){
            validar.preventDefault();
                var user = document.querySelector("#usuario").value;
                var senha = document.querySelector("#senha").value;
                
                if(user == "jennyfer" && senha == "12345678") {
                window.location = "./menuPrincipal.php";
                
                } else {
                    alert("Login incorreto, tente novamente!");
                    
                }
          
        });
        function mostrarSenha(){
            $tipo = document.getElementById("senha");
            if($tipo.type === "password") {
                $tipo.type = "text";
            }
            else if($tipo.type === "text") {
                $tipo.type = "password";
            }
        }

        /* function cancelar(){
            $user = document.querySelector("#usuario").value;
            $senha = document.querySelector("#senha").value;

                if($user == !empty && $senha == !empty){
                    $user == "" && $senha == "";
                }
        } */
         
    </script>
</body>
</html>