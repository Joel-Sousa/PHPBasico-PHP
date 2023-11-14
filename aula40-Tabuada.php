<html>
    <head>
        <meta charset="utf-8">
        <title>Estudo PHP</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="tabuada">
            <input type="submit">
                   
        </form>
        <?php 
        $tab = 0;
        if(isset($_POST["tabuada"])){
            $tab = $_POST["tabuada"];
            if(!is_numeric($tab)){
                echo "Esse nao e um numero";
            }  else {
                for($num=0;$num<=10;$num++){
                    echo $num , " x ", $tab," = ", ($num * $tab), "<br>";
                }
            }
        }
        ?>
    </body>
</html>
