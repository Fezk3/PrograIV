<html>
<head><title>8</title></head>



<body>



<h2> Numeros aleatorios:</h2><br>



<form method="POST" action="Eje8.php">



Cantidad de numeros deseados <input type="number" name="can"><br>
Limite inferior <input type="number" name="inf"><br>
Limite superior <input type="number" name="sup"><br>
Desea no repetir los numeros <input type="checkbox" name="check">
<input type="submit" name=calcular value="Calcular">



</form>



</body>



</html>

<?php

    if(isset($_POST['calcular'])){

        mt_srand (time());

        if($_POST['check']==true){
        echo "Seleccionado <br>";
        $inf = $_POST['inf'];
        $sup = $_POST['sup'];
        $can = $_POST['can'];

            function generar_aleatorios($inf, $sup, $can){

                $numeros = array();
                $i = 0;
                while($i < $can){
                    $numero = mt_rand($inf, $sup);
                    if(!in_array($numero, $numeros)){
                        $numeros[] = $numero;
                        $i++;
                    }
                }
                foreach($numeros as $numero){

                    echo $numero , " ";

                }

            }

            generar_aleatorios($inf, $sup, $can);

    }else{

        for($x=0;$x<$_POST['can'];$x++){

            $res = mt_rand($_POST['inf'],$_POST['sup']);
            echo $res," ";

         }

    }
}
?>