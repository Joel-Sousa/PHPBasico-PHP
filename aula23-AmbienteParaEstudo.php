<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo PHP</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="valor1"><br>
            <input type="text" name="valor2">
            <input type="submit">
        </form>
        <?php
        if(isset($_POST["valor1"])){
        echo $_POST["valor1"];
        echo "<br>";    
        echo $_POST["valor2"];
        
        }
        ?>

    </body>
</html>
