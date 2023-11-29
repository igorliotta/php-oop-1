<?php

// Recupero il file Production.php tramite un require per averlo disponibile nel componente
require_once __DIR__ . ('/Production.php');

// La classe Movie estenderà la classe Production e aggiungerà 2 proprietà: $profit (incassi),  e $duration (con relativi metodi get / set)
class Movie extends Production {
    protected $profit;
    protected $duration;

    public function setProfit($profit) {
        if (is_numeric($profit) && $profit > 0) {
            $this->profit = $profit;
        } else {
            echo 'Il valore $profit non è valido';
        }
    }

    public function getProfit() {
        return $this->profit;
    }

    public function setDuration($duration) {
        if (is_numeric($duration) && $duration > 0) {
            $this->rating = $duration;
        } else {
            echo 'Il valore $duration non è valido';
        }
    }

    public function getDuration() {
        return $this->duration;
    }
}

?>