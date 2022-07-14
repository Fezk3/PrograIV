<?php
function getindex($field = array(), $col)
{
    if ($col > 6) {
        $col = 6;
    }
    for ($y = 0; $y < 6; $y++) {
        if ($field[$y * 7 + $col] != 0) {
            break;
        }
    }
    $y--;
    if ($y > -1) {
        return $y * 7 + $col;
    } else {
        return false;
    }
}

function draw($field = array(), $finnished = false)
{
    $bricks = array(" <span style=\"color: gray;\">.</span> ", "<img src='M.JPG'> ", " <img src='L.JPG'> ");

    echo "<div id=\"field\">";

    if (!$finnished) {
        echo (getindex($field, 0) !== false) ? " <a href=\"?r=0\">1</a> " : " - ";
        echo (getindex($field, 1) !== false) ? " <a href=\"?r=1\">2</a> " : " - ";
        echo (getindex($field, 2) !== false) ? " <a href=\"?r=2\">3</a> " : " - ";
        echo (getindex($field, 3) !== false) ? " <a href=\"?r=3\">4</a> " : " - ";
        echo (getindex($field, 4) !== false) ? " <a href=\"?r=4\">5</a> " : " - ";
        echo (getindex($field, 5) !== false) ? " <a href=\"?r=5\">6</a> " : " - ";
        echo (getindex($field, 6) !== false) ? " <a href=\"?r=6\">7</a> " : " - ";
        echo "<br />";
    }

    for ($y = 0; $y < 6; $y++) {
        for ($x = 0; $x < 7; $x++) {
            echo $bricks[$field[$y * 7 + $x]];
        }
        echo "<br />";
    }

    echo "</div>";
}

function check($field = array())
{
    for ($y = 0; $y < 6; $y++) {
        for ($x = 0; $x < 7; $x++) {
            if (($field[$y * 7 + $x] != 0) and ($win = _check($field, $x, $y))) {
                return $win;
            }
        }
    }
    return false;
}

function _check($field = array(), $x, $y)
{
    $brick = $field[$y * 7 + $x];

    if (
        $y > 2 and
        $field[($y - 1) * 7 + $x] == $brick and
        $field[($y - 2) * 7 + $x] == $brick and
        $field[($y - 3) * 7 + $x] == $brick
    ) {
        return $brick;
    } elseif (
        $y < 3 and
        $field[($y + 1) * 7 + $x] == $brick and
        $field[($y + 2) * 7 + $x] == $brick and
        $field[($y + 3) * 7 + $x] == $brick
    ) {
        return $brick;
    } elseif (
        $x < 4 and
        $field[$y * 7 + ($x + 1)] == $brick and
        $field[$y * 7 + ($x + 2)] == $brick and
        $field[$y * 7 + ($x + 3)] == $brick
    ) {
        return $brick;
    } elseif (
        $x > 2 and
        $field[$y * 7 + ($x - 1)] == $brick and
        $field[$y * 7 + ($x - 2)] == $brick and
        $field[$y * 7 + ($x - 3)] == $brick
    ) {
        return $brick;
    } elseif (
        $x < 4 and $y > 2 and
        $field[($y - 1) * 7 + ($x + 1)] == $brick and
        $field[($y - 2) * 7 + ($x + 2)] == $brick and
        $field[($y - 3) * 7 + ($x + 3)] == $brick
    ) {
        return $brick;
    }

    // left-up
    elseif (
        $x > 2 and $y > 2 and
        $field[($y - 1) * 7 + ($x - 1)] == $brick and
        $field[($y - 2) * 7 + ($x - 2)] == $brick and
        $field[($y - 3) * 7 + ($x - 3)] == $brick
    ) {
        return $brick;
    } elseif (
        $x < 4 and $y < 3 and
        $field[($y + 1) * 7 + ($x + 1)] == $brick and
        $field[($y + 2) * 7 + ($x + 2)] == $brick and
        $field[($y + 3) * 7 + ($x + 3)] == $brick
    ) {
        return $brick;
    } elseif (
        $x > 2 and $y < 3 and
        $field[($y + 1) * 7 + ($x - 1)] == $brick and
        $field[($y + 2) * 7 + ($x - 2)] == $brick and
        $field[($y + 3) * 7 + ($x - 3)] == $brick
    ) {
        return $brick;
    } else {
        return false;
    }
}

function _maqui($field = array(), $x, $y)
{
    $m = $field[$y * 7 + $x];

    if (
        $y > 2 and
        $field[($y - 1) * 7 + $x] == $m and
        $field[($y - 2) * 7 + $x] == $m and
        $field[($y - 3) * 7 + $x] == $m
    ) {
        return $m;
    } elseif (
        $y < 3 and
        $field[($y + 1) * 7 + $x] == $m and
        $field[($y + 2) * 7 + $x] == $m and
        $field[($y + 3) * 7 + $x] == $m
    ) {
        return $m;
    } elseif (
        $x < 4 and
        $field[$y * 7 + ($x + 1)] == $m and
        $field[$y * 7 + ($x + 2)] == $m and
        $field[$y * 7 + ($x + 3)] == $m
    ) {
        return $m;
    } elseif (
        $x > 2 and
        $field[$y * 7 + ($x - 1)] == $m and
        $field[$y * 7 + ($x - 2)] == $m and
        $field[$y * 7 + ($x - 3)] == $m
    ) {
        return $m;
    } else {
        return false;
    }
}
session_start();

if (!isset($_SESSION['fiar_field'])) {
    $_SESSION['fiar_field'] = array(
        0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0,
        0, 0, 0, 0, 0, 0, 0
    );
}
if (!isset($_SESSION['fiar_player'])) {
    $_SESSION['fiar_player'] = 1;
}

if (isset($_GET['q'])) {
    session_destroy();
    header("location: ?restarted");
}
?>

<?php
if ($_SESSION['fiar_player'] == 1) {

    if (isset($_GET['r']) and (($i = getindex($_SESSION['fiar_field'], $_GET['r'])) !== false)) {
        $_SESSION['fiar_field'][$i] = $_SESSION['fiar_player'];
    }
} else {
    $a = rand(0, 6);

    header("location: ?r=$a");
    if (isset($_GET['r']) and (($i = getindex($_SESSION['fiar_field'], $_GET['r'])) !== false)) {

        $_SESSION['fiar_field'][$i] = $_SESSION['fiar_player'];
    }
}

$_SESSION['fiar_player'] = ($_SESSION['fiar_player'] == 2) ? 1 : 2;  //para que los 2 jugadores jueguen

?>
<!DOCTYPE html>
<html>
<center>

    <body background="IMAGES.JPG">
</center>

<head>
    <meta http-equiv="Content-Language" content="sv">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <title>4 en linea </title>

    <style type="text/css">
        body {
            font-family: Verdana;
            font-size: 14px;
        }

        h1 {
            font-family: Arial;
            font-size: 26px;
        }

        h2 {
            font-family: Arial;
            font-size: 22px;
        }

        #game,
        #code {
            width: 500px;
            margin: 0 auto;
        }

        #game {
            text-align: center;
        }

        #field {
            background-color: #fdfdfd;
            width: 450px;
            padding: 10px;
            font-family: Fixedsys, Lucida Console;
            font-size: 44px;
            border: 10px solid #111;
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="game">

        <h1>4 en linea</h1>
        <?php
        if ($winner = check($_SESSION['fiar_field'])) {
            echo "<h2>Jugador " . (($winner == 1) ? "<span style=\"color: red;\">Maquina</span>" : "<span style=\"color: green;\">Jugador</span>") . " GANA!!</h2>";

            draw($_SESSION['fiar_field'], true);
        } else {
            echo "<h2>Jugador " . (($_SESSION['fiar_player'] == 1) ? "<span style=\"color: red;\">Maquina</span> " : "<span style=\"color: green;\">Humano</span>") . ", tu turno</h2>";

            draw($_SESSION['fiar_field']);
        }
        ?>
        <br />
        <a href="?q">Reiniciar</a>

</body>
<br><br><br><br><br><br><br><br><br><br>
<footer class="center">
    <h2>CC BYNC Cristopher Montero J.</h2>
</footer>

</html>