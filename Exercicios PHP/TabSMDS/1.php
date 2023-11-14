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
            Tipo de Tabuada:<br>
            +<input type="radio" name="calculo" value="+" required="true"/>
            -<input type="radio" name="calculo" value="-" required="true"/>
            *<input type="radio" name="calculo" value="*" required="true"/>
            /<input type="radio" name="calculo" value="/" required="true"/><br>
<!--            Valor1:<input type="number" name="nmr1" required="true"/><br>
            Valor2:<input type="number" name="nmr2" required="true"/><br>-->
            <input type="submit" value="Calcular"/>
        </form>
    </body>
</html>
