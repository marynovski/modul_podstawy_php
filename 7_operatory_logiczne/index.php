<?php
//Przedstawiamy operatory logiczne not, or, and, xor

$x = false;

$notX = !$x;

echo 'NOT <br>';
var_dump($notX);

$x = true;
$y = true;

$and = ($x && $y);
echo 'AND x y: '; var_dump($and);



?>

