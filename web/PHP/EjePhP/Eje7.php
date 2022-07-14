<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <h2> Calcular:</h2><br>

    <form method="POST" action="Eje7.php">

        Numero para el fibonnaci: <input type="number" name="no1"><br>
        <input type="submit" name=calcular value="Calcular">

    </form>

    <?php

        if(isset($_POST['calcular'])){
            $num= $_POST['no1'];
            function fibonacci($num){
                if($num==0){
                    return 0;
                }elseif($num==1){
                    return 1;
                }else{
                    return fibonacci($num-1)+fibonacci($num-2);
                }
            }

            echo fibonacci($num);
        }
    ?>
    
</body>
</html>