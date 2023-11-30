<?php

// Recupero il file Production.php tramite un require per averlo disponibile nel componente
require_once __DIR__ . ('/Production.php');

// La classe Serie estenderà anch’essa Production aggiungendo la proprietà $season  (con relativi metodi get / set) ovvero il numero della stagione
class Serie extends Production {
    protected $season;

     // Creo il costrutto di Serie però implementando la struttura del costrutto genitore (costrutto di Production)
     public function __construct($_title, $_language, $_rating, $_season) {
        parent:: __construct($_title, $_language, $_rating);
        $this->setSeason($_season);
    }

    public function getSeason() {
        return $this->season;
    }

    public function setSeason($_season) {
        if (is_numeric($_season) && $_season >= 1) {
            $this->season = $_season;
        }
    }

    public function getDetailsAsAssociativeArrray() {
        $details = parent::getDetailsAsAssociativeArrray();
        $details['season'] = $this->getSeason();
        return $details;
      }

}
?>