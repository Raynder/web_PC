<!DOCTYPE html>
<html lang="pt-br">
    <!--Bem vindo ao codigo muito complexo da tela de carregamento... cuidado!-->
    <head>
        <script>
            function subm(){
                var altura;
                var largura;
                largura = window.screen.availWidth
                altura = window.screen.availHeight
                document.getElementById('altura').value =altura
                document.getElementById('largura').value =largura

                formu.submit()
            }

            setTimeout(function(){
                subm()
            },100)
        </script>
    </head>
    <body>
        <form method="post" action="load.php" name="formu" id="formu">
            <input type="text" id="altura" value="" style="display:none" name="altura">
            <input type="text" id="largura" value="" style="display:none" name="largura">
        </form>
    </body>
</html>
