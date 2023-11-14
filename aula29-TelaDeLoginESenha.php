<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo PHP</title>
    </head>
    <body>
        <fieldset>
            <legend>Login</legend>
            <form method="post">
                <input type="text" name="login"><br>
                <input type="text" name="senha">
                <input type="submit">
            </form>
            <?php
            if (isset($_POST["login"])) {
                $login = "eu";
                $senha = 123;
                if (($login == $_POST["login"]) and $senha == $_POST["senha"]){
                 echo "Login efetuado com sucesso";
                }  else {
                    echo "login ou senha invalidos";
                }
            
            }
            ?>
        </fieldset>

    </body>
</html>
