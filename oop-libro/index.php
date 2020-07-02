<?php

require_once 'Libro.php';
require_once 'Manuale.php';

$libro1 = new Libro('La divina commedia', 'Dante Alighieri');
$libro1->numero_pagine = 300;

$libro2 = new Libro('I promessi sposi', 'Alessandro Manzoni');
$libro2->numero_pagine = 500;

echo '<pre>';
var_dump($libro1);
var_dump($libro2);
echo '</pre>';

$tempo_libro1 = $libro1->tempo_lettura(2);
$tempo_libro2 = $libro2->tempo_lettura(2);

echo "per leggere " . $libro1->titolo . " ti ci vogliono " . $tempo_libro1 . " minuti";
echo '<br>';
echo "per leggere " . $libro2->titolo . " ti ci vogliono " . $tempo_libro2 . " minuti";
echo '<br>';


$manuale1 = new Manuale('PHP for dummies', 'Pippo', 'PHP');
$manuale1->numero_pagine = 100;
$tempo_manuale1 = $manuale1->tempo_lettura(1);
echo "per leggere " . $manuale1->titolo . " ti ci vogliono " . $tempo_manuale1 . " minuti";

echo '<pre>';
var_dump($manuale1);
echo '</pre>';
?>
