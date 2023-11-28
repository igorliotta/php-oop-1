<?php

class Production {
    public $title;
    public $language;
    public $rating;

    public function __construct($_title, $_language, $_rating) {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setRating($_rating);
    }

    public function setRating($rating) {
        if (is_numeric($rating)) {
            $this->rating = intval($rating);
        } else {
            echo 'Il valore $rating non è valido';
            echo '<br>';
        }
    }

    public function setTitle($title) {
         $this->title = $title;
    }

    public function setLanguage($language) {
        $this->language = $language;
    }
}

$production1 = new Production('Una notte da leoni', 'italiano', 0);
$production2 = new Production('Harry Potter saga', 'inglese', 9);
$production3 = new Production('Limitless', 'islandese', 7.5);
// $production1->setTitle('Una notte da leoni');
// $production1->setLanguage("Italiano");
// $production1->setRating(0);

echo('Il titolo della produzione è:' . ' ' . $production1->title . '.');
echo('<br>');
echo('La lingua della produzione è in:' . ' ' . $production1->language . '.');
echo('<br>');
echo('Il voto della produzione è:' . ' ' . $production1->rating . '.');
echo('<hr>');
echo('Il titolo della produzione è:' . ' ' . $production2->title . '.');
echo('<br>');
echo('La lingua della produzione è in:' . ' ' . $production2->language . '.');
echo('<br>');
echo('Il voto della produzione è:' . ' ' . $production2->rating . '.');
echo('<hr>');
echo('Il titolo della produzione è:' . ' ' . $production3->title . '.');
echo('<br>');
echo('La lingua della produzione è in:' . ' ' . $production3->language . '.');
echo('<br>');
echo('Il voto della produzione è:' . ' ' . $production3->rating . '.');
echo('<br>');
?>