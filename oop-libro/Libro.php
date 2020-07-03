<?php

require_once 'TempoNonInt.php';
require_once 'PagineNonDefinite.php';

class Libro {
    protected $titolo;
    public $autore;
    private $numero_pagine;
    public $editore;
    public $copertina;
    public $isbn;

    public function __construct($_titolo, $_autore) {
        $this->titolo = $_titolo;
        $this->autore = $_autore;
    }

    public function tempo_lettura($tempo_pagina) {
        if(!is_int($tempo_pagina) || $tempo_pagina <= 0) {
            throw new TempoNonInt("Hai inserito un tempo non valido");
        }
        if(empty($this->numero_pagine)) {
            throw new PagineNonDefinite("Non hai definito il numero di pagine");
        }
        return $tempo_pagina * $this->numero_pagine;
    }

    public function get_titolo() {
        return $this->titolo;
    }

    public function get_numero_pagine() {
        return $this->numero_pagine;
    }

    public function set_numero_pagine($_numero_pagine) {
        if(Libro::check_numero_pagine($_numero_pagine)) {
            $this->numero_pagine = $_numero_pagine;
        }
    }

    protected static function check_numero_pagine($_numero) {
        if(is_int($_numero) && $_numero > 0) {
            return true;
        }
        return false;
    }
}

?>
