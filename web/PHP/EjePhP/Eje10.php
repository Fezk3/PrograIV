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

    <form method="POST" action="Eje10.php">

        Primer numero <input type="number" name="no1"><br>
        Segundo numero <input type="number" name="no2"><br>
        <input type="submit" name=calcular value="Calcular">

    </form>

    <?php

        if(isset($_POST['calcular'])){
            $n1 = $_POST['no1'];
            $n2 = $_POST['no2'];
            $res = 0;

            if($n1 == $n2){
                $res = $n1*$n2 ;
                echo "La multiplicacion es: $res <br>";
            }else if($n1 > $n2){
                $res = $n1-$n2;
                echo "La resta es: $res <br>";
            }else{
                $res = $n1+$n2;
                echo "La suma es: $res <br>";
            }

        }
    ?>
    
</body>
</html>