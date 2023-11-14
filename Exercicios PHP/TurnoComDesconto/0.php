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
            Nome:<input type="text" name="nome1" required="true"/><br>
            Turno:
            Manha:<input type="radio" name="turno" value="manha" required="true"/>
            Tarde:<input type="radio" name="turno" value="tarde" required="true"/>
            Noite:<input type="radio" name="turno" value="noite" required="true"/><br>
            <input type="submit" value="Ir"/>
        </form>
    </body>
</html>