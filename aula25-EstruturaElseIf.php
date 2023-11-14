<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo PHP</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="valor1">
            <input type="submit">
        </form>
        <?php
        if (isset($_POST["valor1"])) {
            $valor1 = $_POST["valor1"];
            if ($valor1 < 13) {
                echo "Essa e uma idade de uma criança.";
            } elseif ($valor1 >= 13 and $valor1 < 18) {
                echo "Essa e uma idade de um adolecente.";
            }elseif($valor1 >=18 and $valor1 <60){
                echo "Essa e uma idade de um jovem.";
            }else{
                echo "Essa e uma idade de um idoso.";
            }
        }
        ?>

    </body>
</html>
