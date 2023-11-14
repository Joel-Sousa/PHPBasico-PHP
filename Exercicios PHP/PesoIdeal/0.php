<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="recebe.php" method="post">
            Altura:<input type="text" name="valor" required="true"/><br>
            Sexo:
            M<input type="radio" name="sexo" value="m" required="true"/>
            F<input type="radio" name="sexo" value="f" required="true"/><br>
            <input type="submit" value="Ir"/>
        </form>
    </body>
</html>
