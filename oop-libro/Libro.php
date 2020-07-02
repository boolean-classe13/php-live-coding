<?php

class Libro {
    public $titolo;
    public $autore;
    public $numero_pagine = 0;
    public $editore;
    public $copertina;
    public $isbn;

    public function __construct($_titolo, $_autore) {
        $this->titolo = $_titolo;
        $this->autore = $_autore;
    }

    public function tempo_lettura($tempo_pagina) {
        return $tempo_pagina * $this->numero_pagine;
    }
}

?>
