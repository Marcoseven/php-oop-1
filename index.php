<?php

/* 
Traccia esercitazione.

Descrizione:
Ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie
{
  public $title;
  public $original_language;
  public $genre;
  public $duration;
  public $production_year;
  public $country_of_production;

  /**
   * Movie constructor
   * @param string $title
   * @param string $original_language
   * @param string $genre
   * @param string $duration
   * @param string $production_year
   * @param string $country_of_production
   */

  function __construct(string $title, string $original_language, string $genre, float $duration, float $production_year, string $country_of_production) 
  {
    $this->title = $title;
    $this->original_language = $original_language;
    $this->genre = $genre;
    $this->duration = $duration;
    $this->production_year = $production_year;
    $this->country_of_production = $country_of_production;
  }

  /**
  * Return the title of the movie 
  * @return string  
  */

  public function getTitle()
  {
    return $this->title;
  }

  /**
  * Return the original language of the movie 
  * @return string  
  */

  public function getOriginalLanguage()
  {
    return $this->original_language;
  }
}

$Ritorno_al_futuro = new Movie('Ritorno al futuro', 'inglese', 'Avventura, commedia e fantascienza', 116, 1985, 'USA');
$Spiderman = new Movie('Spider-Man', 'inglese', 'Azione, avventura e drammatico', 121, 2002, 'USA');

echo '<pre>';
var_dump($Ritorno_al_futuro, $Spiderman);
var_dump('Titolo primo film: ' . $Ritorno_al_futuro->getTitle(), 'Lingua originale: ' . $Ritorno_al_futuro->getOriginalLanguage());
var_dump('Titolo secondo film: ' . $Spiderman->getTitle(), 'Lingua originale: ' . $Spiderman->getOriginalLanguage());
echo '</pre>';

