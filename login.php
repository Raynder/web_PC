<?php
    $altura = $_POST['altura'];
    $largura = $_POST['largura'];

    if(!empty($altura) && !empty($largura)){
        if($altura < $largura) header("location:index.php");
    }
    else{
        header("location:teste.php");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <!--Bem vindo ao codigo muito complexo da tela de carregamento... cuidado!-->
    <head>
        <style>
            body{
                background-color: #5a7edc;
                margin: 0;
                padding: 0;
            }
            .lg {
                background-color: #002f9c;
                height: 15%;
                width: 100%;
                position: absolute;
            }
            .top{
                top: 0;
            }
            .bot{
                bottom: 0;
            }
            .login{
                width: 100%;
            }
            .log{
                display:none;
                width:231px;
                height:58px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: trnaslate(-50% -50%);
            }
            .user {
                width: 78%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .titu {
                height: 14%;
                background-color: white;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                background-color: #0355e9;
                background-image: linear-gradient(to right, #0355e9, #006afc, #0355e9);
            }
            .apresentação {
                height: 45%;
                background-color: white;
                background-color: #6386e2;
                background-image: linear-gradient(to right, #6386e2, #9ebbf5, #6386e2);
            }
            .formulario {
                height: 41%;
                background-color: #ece9d6;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
            }
            .total p{
                margin: 0;
            }
            .total {
                border: 4px solid;
                border-color: #025ff2;
                left: 50%;
                top: 50%;
                border-radius: 20px;
                width: 80%;
                height: 33%;
                background-color: black;
                position: absolute;
                transform: translate(-50%, -50%);
                margin: 0;
                
            }
            .titu.bloco p {
                position: relative;
                font-size: 31px;
                top: 50%;
                transform: translateY(-50%);
                left: 32px;
                color: white;
                font-weight: bolder;
            }
            img.icon-Win {
                width: 26%;
                position: relative;
                top: 8%;
                left: 18%;
            }
        </style>
        <script>

            setTimeout(function(){
                document.getElementById('log').style.display = 'none'
            },3000)
        </script>
    </head>
    <body>
        <div class="lg top"><p></p></div>
        <div class="lg bot"><p></p></div>
        <form name="formu" action="login.php" method="post">
            <input type="text" id="altura" name="altura" style="display:none" value="<?=$altura?>">
            <input type="text" id="largura" name="largura" style="display:none" value="<?=$largura?>">
            <div class="total">
            <div class="titu bloco">
                <p>Benvindo - Cadastre seu usuario:</p>
            </div>
            
            <div class="apresentação bloco">
                <img src="img/icone.png" class="icon-Win">
                <p></p>
            </div>
            
            <div class="formulario bloco">
                <p></p>
            </div>
         </div>
            <img class="user" src="img/user.png" id="log">
        </form>
    </body>
</html>

