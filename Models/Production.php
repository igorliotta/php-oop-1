<?php

require_once __DIR__ . ('/Movie.php');
require_once __DIR__ . ('/Serie.php');
class Production
{
    public $title;
    public $language;
    public $rating;


    public function __construct($_title, $_language, $_rating)
    {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setRating($_rating);
    }

    public function setRating($rating)
    {
        if (is_numeric($rating)) {
            $this->rating = intval($rating);
        } else {
            echo 'Il valore $rating non è valido';
        }
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getDetailsAsAssociativeArrray() {
      $details = [
        'title' => $this->getTitle(),
        'language' => $this->getLanguage(),
        'rating' => $this->getRating()
      ];
      return $details;
    }
}
