<?php

// LIVE CODING:
// Inserire tante parole all’interno di un array
// e controllare che la parola passata dall’utente ci sia nell’array.

// dichiaro un array "standard" => le chiavi sono numeriche e partono da 0
$nomi = ['Pippo', 'Pluto', 'Paperino', 'Topolino'];

// recupero la parola passata in GET
$parola = $_GET['nome'];

// in_array mi permette di verificare se un elemento è presente in un array
// restituisce true se trova l'elemento nel'array, false altrimenti
$trovata = in_array($parola, $nomi);

if($trovata) {
    // $trovata == true
    echo "La parola " . $parola . " è  stata trovata nell'array";
} else {
    // $trovata == false
    echo "La parola " . $parola . " non è presente nell'array";
}

echo '<br><br>';
echo "**** stampa di tutti i nomi dell'array con ciclo for *****";
echo '<br>';

// per stampare tutti i nomi posso usare il (già noto) ciclo for
for ($i = 0; $i < count($nomi); $i++) {
    $nome = $nomi[$i];
    echo $nome . ' ';
}

echo '<br><br>';
echo "**** stampa di tutti i nomi dell'array con ciclo foreach *****";
echo '<br>';

// posso ciclare più comodamente gli elementi di un array con il ciclo foreach!
foreach ($nomi as $nome) {
    echo $nome . ' ';
}

echo '<br><br>';
echo "**** stampa di tutte le informazioni di un array associativo *****";
echo '<br>';

$persona = [
    'nome' => 'Mario',
    'cognome' => 'Rossi',
    'eta' => 30
];

// il ciclo foreach funziona bene anche con le chiavi stringhe "custom"
foreach ($persona as $informazione) {
    echo $informazione . '<br>';
}

echo '<br>';
echo "**** stampa di tutte le informazioni di un array associativo con le chiavi *****";
echo '<br>';

// ancora meglio se ho bisogno di conoscere la chiave!
foreach ($persona as $dato => $informazione) {
    echo $dato . ': ' . $informazione . '<br>';
}


echo '<br><br>';
echo "**** stampa di un array di studenti *****";

// creo una struttura più complessa:
// un array di array (che rappresentano degli studenti)
$studenti = [
    'Mario Rossi' => [
        'eta' => 30,
        'materie_preferite' => ['HTML', 'CSS'],
        'matricola' => 'zxc'
    ],
    'Luigi Verdi' => [
        'eta' => 29,
        'materie_preferite' => ['PHP', 'JS'],
        'matricola' => 'asd'
    ],
    'Silvia Bianchi' => [
        'eta' => 32,
        'materie_preferite' => ['PHP', 'JS', 'HTML'],
        'matricola' => 'qwe'
    ]
];

// utilizzo il foreach per ciclare tutti gli studenti dell'array esterno
foreach ($studenti as $nome_cognome => $dati_studente) {
    // per ogni studente stampo il nome e tutte le sue informazioni

    // N.B. 1: il nome è la chiave, mentre le informazioni sono in un array!
    // => utilizzo le [] per accedere al valore delle informazioni

    // N.B 2: le materie preferite sono a loro volta in un array!
    // => utilizzo la funzione implode per trasformarlo in una stringa
    ?>
    <h1><?php echo $nome_cognome; ?></h1>
    <p>Matricola: <?php echo $dati_studente['matricola']; ?></p>
    <p>Eta: <?php echo $dati_studente['eta']; ?></p>
    <p>Materie preferite: <?php echo implode(', ', $dati_studente['materie_preferite']); ?></p>
    <hr>
    <?php
    // in alternativa, si può utilizzare un ciclo foreach innestato per ciclare tutte le informazioni
    // la chiave in questo caso è il nome del dato
    // il valore è l'inforazione stessa
    echo "**** stampa 'grezza' con semplice echo e foreach di tutte le chiavi *****";
    echo '<br>';
    foreach ($dati_studente as $dato => $informazione) {
        if(is_array($informazione)) {
            echo $dato . ': ' . implode(', ', $informazione) . '<br>';
        } else {
            echo $dato . ': ' . $informazione . '<br>';
        }
    }
}
?>
