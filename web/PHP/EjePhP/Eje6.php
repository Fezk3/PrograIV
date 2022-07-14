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

    <form method="POST" action="Eje6.php">

        Primer numero <input type="number" name="no1"><br>
        Segundo numero <input type="number" name="no2"><br>
        Tercero numero <input type="number" name="no3"><br>
        Cuarto numero <input type="number" name="no4"><br>
        Quinto numero <input type="number" name="no5"><br>
        <input type="submit" name=calcular value="Calcular">

    </form>

    <?php

        if(isset($_POST['calcular'])){
            $res= $_POST['no1']+$_POST['no2']+$_POST['no3']+$_POST['no4']+$_POST['no5'];
            $res= $res/5;
            echo "El promedio es: $res <br>";
        }
    ?>
    
</body>
</html>