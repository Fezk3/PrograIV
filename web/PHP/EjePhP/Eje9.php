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

    <form method="POST" action="Eje5.php">

        Peso en  <input type="number" name="no1"><br>
        Segundo numero <input type="number" name="no2"><br>
        <input type="submit" name=calcular value="Calcular">

    </form>

    <?php

        if(isset($_POST['calcular'])){
            $res1= $_POST['no1']+$_POST['no2'];
            $res2= $_POST['no1']-$_POST['no2'];
            $res3= $_POST['no1']*$_POST['no2'];
            $res4= $_POST['no1']/$_POST['no2'];
            echo "El resultado de la suma es: $res1 <br>";
            echo "El resultado de la resta es: $res2 <br>";
            echo "El resultado de la multiplicacion es: $res3 <br>";
            echo "El resultado de la division es: $res4 <br>";
        }
    ?>
    
</body>
</html>