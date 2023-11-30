<?php

// Recupero il file Production.php tramite un require per averlo disponibile nel componente
require_once __DIR__ . ('/Production.php');

// La classe Movie estenderà la classe Production e aggiungerà 2 proprietà: $profit (incassi),  e $duration (con relativi metodi get / set)
class Movie extends Production {
    protected $profit;
    protected $duration;

    // Creo il costrutto di Movie però implementando la struttura del costrutto genitore (costrutto di Production)
    public function __construct($_title, $_language, $_rating, $_profit, $_duration) {
        parent:: __construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function setProfit($_profit) {
        if (is_numeric($_profit) && $_profit > 0) {
            $this->profit = $_profit;
        }
    }

    public function getProfit() {
        return $this->profit;
    }

    public function setDuration($_duration) {
        if (is_numeric($_duration) && $_duration > 0) {
            $this->duration = intval($_duration);
        } 
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getDetailsAsAssociativeArrray() {
        $details = parent::getDetailsAsAssociativeArrray();
        $details['profit'] = $this->getProfit();
        $details['duration'] = $this->getDuration();
        return $details;
      }
}



?>