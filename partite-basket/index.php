<?php
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$matches = [
    [
        'squadra_casa' => 'Pippo',
        'squadra_ospite' => 'Pluto',
        'punti_casa' => 50,
        'punti_ospite' => 65
    ],
    [
        'squadra_casa' => 'Paperino',
        'squadra_ospite' => 'Topolino',
        'punti_casa' => 59,
        'punti_ospite' => 25
    ],
    [
        'squadra_casa' => 'Minnie',
        'squadra_ospite' => 'Qui',
        'punti_casa' => 79,
        'punti_ospite' => 125
    ]
];

// stampa "grezza" con semplice echo
// foreach ($matches as $match) {
//     echo $match['squadra_casa'] . ' - ' .  $match['squadra_ospite'] . ' | ' . $match['punti_casa'] . ' - ' . $match['punti_ospite'];
//     echo '<br>';
// }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Partite basket giornata calendario</title>
    </head>
    <body>
        <div id="lista_parite">

            <?php
            // creo un div per ogni partita e stampo le informazioni con il formato richiesto
            foreach ($matches as $match) { ?>
                <div class="partita">
                    <?php
                        echo $match['squadra_casa'] . ' - ' .
                        $match['squadra_ospite'] . ' | ' .
                        $match['punti_casa'] . ' - ' .
                        $match['punti_ospite'];
                    ?>
                </div>
                <?php
            }
            ?>

        </div>
    </body>
</html>
