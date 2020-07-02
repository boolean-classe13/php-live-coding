<?php

require_once 'Libro.php';

class Manuale extends Libro {
    public $argomento;

    public function __construct($_titolo, $_autore, $_argomento) {
        parent::__construct($_titolo, $_autore);
        $this->argomento = $_argomento;
    }

    public function tempo_lettura($tempo_pagina) {
        // return $tempo_pagina * $this->numero_pagine * 1.2;
        return parent::tempo_lettura($tempo_pagina) * 1.2;
    }

}

?>
