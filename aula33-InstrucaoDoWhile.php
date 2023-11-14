<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo PHP</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="dependentes">
            <input type="submit">
        </form>
        <?php 
        if (isset($_POST["dependentes"])){
            $dependentes = $_POST["dependentes"];
            if (!is_numeric($dependentes)){
                $dependentes = 1;
                echo "Valor nao numerico";
            }
            
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Nome</th>";
            echo "<th>Nasc</th>";
            echo "</tr>";
            
            $conta = 0;
        do {
             $conta = $conta + 1;
             echo "<tr>";
             echo "<td>Dependente</td>";
             echo "<td></td>";
             echo "<td></td>";
             echo "</tr>";
             //echo $conta;
        }while($conta < $dependentes);
        echo "</table>";
        }
        ?>
    </body>
</html>

