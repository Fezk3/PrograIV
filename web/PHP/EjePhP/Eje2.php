<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <h2> Suma:</h2><br>

    <form method="POST" action="Eje2.php">

        Primer numero <input type="number" name="no1"><br>
        Segundo numero <input type="number" name="no2"><br>
        <input type="submit" name=sumar value="Sumar">

    </form>

    <?php

        if(isset($_POST['sumar'])){
            $res= $_POST['no1']+$_POST['no2'];
            echo "El resultado de la suma es: $res";
        }
    ?>
    
</body>
</html>