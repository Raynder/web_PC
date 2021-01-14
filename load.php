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
                    background-color: black;
                }
                .load{
                width: 100%;
                margin: -10px;
                position: absolute;
                top: 40%;
                transform: translateY(-50%);
            }
            p {
                color: white;
                font-size: 38px;
                position: absolute;
                bottom: 27px;
                left: 57px;
            }
        </style>
        <script>

            setTimeout(function(){
                formu.submit()
            },3000)
        </script>
    </head>
    <body>
        <form name="formu" action="login.php" method="post">
            <input type="text" id="altura" name="altura" style="display:none" value="<?=$altura?>">
            <input type="text" id="largura" name="largura" style="display:none" value="<?=$largura?>">
        </form>
        <img class="load" src="img/WinXpLoad.gif">
        <p>Copyright c 2020-2021<br>Seven 7 Corporation</p>
    </body>
</html>

