<?php

require_once 'Libro.php';
require_once 'Manuale.php';

$libro1 = new Libro('La divina commedia', 'Dante Alighieri');
// la proprietà "numero_pagine" è privata
// => devo utilizzare delle apposite funzioni per leggerne e modificarne il valore
$libro1->set_numero_pagine(300);
echo 'Numero di pagine de "La divina commedia": ' . $libro1->get_numero_pagine();

echo '<pre>';
echo '***** Dump libro 1 *****<br>';
var_dump($libro1);
echo '</pre>';

// provo ad invocare la funzione per calcolare il tempo di lettura con un parametro errato
// la funzione lancerà l'eccezione "TempoNonInt" che viene catturata dal primo catch
try {
    $tempo_libro1 = $libro1->tempo_lettura('test');
    echo 'Per leggere "' . $libro1->get_titolo() . '" ti ci vogliono ' . $tempo_libro1 . ' minuti';
} catch (TempoNonInt $e) {
    echo 'Si è verificato un errore: ' . $e->getMessage();
} catch (PagineNonDefinite $e) {
    echo 'Dati errati: ' . $e->getMessage();
} catch (Exception $e) {
    // scrivo nel file di log che si è verificato un errore
    echo 'errore generico';
}

$libro2 = new Libro('I promessi sposi', 'Alessandro Manzoni');
// $libro2->set_numero_pagine(500);

echo '<pre>';
echo '***** Dump libro 2 *****<br>';
var_dump($libro2);
echo '</pre>';

// provo ad invocare la funzione per calcolare il tempo di lettura senza aver impostato il numero di pagine del libro
// la funzione lancerà l'eccezione "PagineNonDefinite" che viene catturata dal secondo catch
try {
    $tempo_libro2 = $libro2->tempo_lettura(2);
    echo 'Per leggere "' . $libro2->get_titolo() . '" ti ci vogliono ' . $tempo_libro2 . ' minuti';
} catch (TempoNonInt $e) {
    echo 'Si è verificato un errore: ' . $e->getMessage();
} catch (PagineNonDefinite $e) {
    echo 'Dati errati: ' . $e->getMessage();
} catch (Exception $e) {
    // scrivo nel file di log che si è verificato un errore
    echo 'errore generico';
}

$manuale1 = new Manuale('PHP for dummies', 'Pippo', 'PHP');
$manuale1->set_numero_pagine(100);

echo '<pre>';
echo '***** Dump manuale *****<br>';
var_dump($manuale1);
echo '</pre>';

// provo ad invocare la funzione per calcolare il tempo di lettura con un parametro errato
// la funzione lancerà l'eccezione "TempoNonInt" che viene catturata dall'unico catch presente
// questo è possibile perché "TempoNonInt" estende la classe Exception!
try {
    $tempo_manuale1 = $manuale1->tempo_lettura('test');
    echo 'Per leggere "' . $manuale1->get_titolo() . '" ti ci vogliono ' . $tempo_manuale1 . ' minuti';
} catch (Exception $e) {
    // scrivo nel file di log che si è verificato un errore
    echo 'errore generico';
}

?>
