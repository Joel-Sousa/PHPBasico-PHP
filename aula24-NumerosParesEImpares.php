<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo PHP</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="valor1"><br>
            <input type="submit">
        </form>
        <?php
        if(isset($_POST["valor1"])){
            $num = $_POST["valor1"];
            if($num % 2 == 0){
                echo "O numero ", $num, " e par.";
            }  else {
                echo "O numero ", $num, " e impar.";
            }
        }
        ?>

    </body>
</html>
