<?php

var_dump($_POST);
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$genere = $_POST['genere'];
$linguaggi = $_POST['linguaggi'];
$lingua = $_POST['lingua'];

switch($lingua) {
    case 'it': {
        $saluto = 'Ciao';
        break;
    }
    case 'en': {
        $saluto = 'Hello';
        break;
    }
    case 'de': {
        $saluto = 'Hallo';
        break;
    }
    default: {
        $saluto = 'buongiorno';
    }
}

if($genere == 'F') {
    $classe = 'rosa';
} elseif($genere == 'M') {
    $classe = 'azzurro';
} else {
    $classe = '';
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 class="<?php echo $classe ?>">
            <?php echo $saluto . ' ' . $nome . ' ' . $cognome; ?>!
        </h1>
        <h2>Ecco i linguaggi che conosci: </h2>
        <ul>
            <?php foreach ($linguaggi as $linguaggio) { ?>
                <li><?php echo $linguaggio ?></li>
                <?php
            } ?>
        </ul>
    </body>
</html>
