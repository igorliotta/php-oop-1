<?php

// Recupero il file Production.php tramite un require per averlo disponibile nel componente
require_once __DIR__ . ('/Production.php');

// La classe Serie estenderà anch’essa Production aggiungendo la proprietà $season  (con relativi metodi get / set) ovvero il numero della stagione
class Serie extends Production {
    protected $season;

    public function getSeason() {
        return $this->season;
    }

    public function setSeason($season) {
        if (is_numeric($season) && $season > 0) {
            $this->season = $season;
        } else {
            echo 'Il valore $season non è valido';
        }
    }

}

?>