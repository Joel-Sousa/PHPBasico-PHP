<html>
    <head>
        <meta charset="utf-8"/>
        <title>Estudo</title>
    </head>
    <body>
        <form method="post">
            <select name="calendario">
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
            <input type="submit"/>
        </form>
        <?php 
        
        if(isset($_POST["calendario"])){
            $x = $_POST["calendario"];
            switch ($x){
                case 1:
                    echo "janeiro";
                    break;
                case 2:
                    echo "fevereiro";
                    break;
                case 3:
                    echo "março";
                    break;
                case 4:
                    echo "abril";
                    break;
                case 5:
                    echo "maio";
                    break;
                case 6:
                    echo "junho";
                    break;
                case 7:
                    echo "julho";
                    break;
                case 8:
                    echo "agosto";
                    break;
                case 9:
                    echo "setembro";
                    break;
                case 10:
                    echo "outubro";
                    break;
                case 11:
                    echo "novembro";
                    break;
                case 12:
                    echo "desembro";
                    break;
            }
            
        }
            
            
        ?>
    </body>
</html>
