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
            Professor:<input type="radio" name="tipo" value="p" required="true"/>
            Aluno:<input type="radio" name="tipo"  value="a" required="true"/><br>
            Nome:<input type="text" name="nome" required="true"/><br>
            Livro:<input type="text" name="livro" required="true"/><br>
            <input type="submit" value="Ir"/>
            
        </form>
    </body>
</html>
