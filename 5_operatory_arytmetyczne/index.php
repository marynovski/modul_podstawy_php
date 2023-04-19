<?php
// Przedstawiamy operatory artytmetyczne oraz operatory przypisania.
//Dodawanie
$a = 0;
$b = 0;

//Odejmowanie
$c = 0;
$d = 0;

//Mnożenie
$e = 0;
$f = 0;

//Dzielenie
$g = 0;
$h = 0;

//Potęgowanie
$i = 0;
$j = 0;

//Pierwiastkowanie
$k = 0;
$l = 0;

//Modulo
$m = 0;
$n = 0;

//Operatory przypisania, inkrementacja, dekrementacja

$x = 0;

$x++;

$x--;



?>
<!Doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operatory arytmetyczne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <tr>
                <th>Działanie</th>
                <th>A</th>
                <th>B</th>
                <th>Wynik</th>
            </tr>
            <tr>
                <td>Dodawanie A + B</td>
                <td><?= $a ?></td>
                <td><?= $b ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Odejmowanie A - B</td>
                <td><?= $c ?></td>
                <td><?= $d ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Mnożenie A * B</td>
                <td><?= $e ?></td>
                <td><?= $f ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Dzielenie A / B</td>
                <td><?= $g ?></td>
                <td><?= $h ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Potęgowanie A ** B</td>
                <td><?= $i ?></td>
                <td><?= $j ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Pierwiastkowanie</td>
                <td><?= $k ?></td>
                <td><?= $l ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Modulo A % B</td>
                <td><?= $m ?></td>
                <td><?= $n ?></td>
                <td></td>
            </tr>
        </table>
        <table class="table table-bordered mt-3">
            <tr>
                <th>Działanie</th>
                <th>Wartość przed</th>
                <th>Wartość w trakcie</th>
                <th>Wartość po </th>
            </tr>
            <tr>
                <td>Przypisanie wartości a = 0</td>
                <td>N/A</td>
                <td></td>
                <td><?= $x ?></td>
            </tr>
            <tr>
                <td>Postinkrementacja a++</td>
                <td><?= $x ?></td>
                <td></td>
                <td><?= $x ?></td>
            </tr>
            <tr>
                <td>Preinkrementacja ++a</td>
                <td><?= $x ?></td>
                <td></td>
                <td><?= $x ?></td>
            </tr>
            <tr>
                <td>a += 2</td>
                <td><?= $x ?></td>
                <td></td>
                <td><?= $x ?></td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
