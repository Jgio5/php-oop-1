<?php

ini_set('display_errors', 1);

//1. creare classe Movie
class Movie {

    //2. dichiarazione proprietà
    public $title;
    public $originalTitle;
    public $directorFilm;
    public $genre;
    private $duration = '';
    public $year;

    //3. dichiarazione costruttore
    // public function __construct($_title, $_originalTitle) {
    //     $this->title = $_title;
    //     $this->originalTitle = $_originalTitle;
    // }

    // 4. dichiarazione metodo
    public function setDuration($duration)
    {  
        if($duration < 30) {
            $this->duration = 'Cortometraggio';
        }
        else {
            $this->duration = 'Lungometraggio';
        }
    }

    public function getDuration() {
        return $this->duration;
    }

}

//5. instaziamento di 2 oggetti

// $firstFilm = new Movie ('500 giorni insieme', '500 days of summer');
// var_dump($firstFilm);

// $secondFilm = new Movie ('Il primo uomo', 'first man');
// var_dump($secondFilm);

$pixar = new Movie();
echo "Titolo: " . $pixar->title = 'Quando il giorno incontra la notte';
echo "<br>";
echo "Titolo originale: " . $pixar->originalTitle = 'Day & Night';
echo "<br>";
echo "Direttore del film: " . $pixar->directorFilm = 'Teddy Newton';
echo "<br>";
echo "Genere: " . $pixar->genre = 'Animation';
echo "<br>";

$pixar->setDuration('25');
echo "Durata: " . $pixar->getDuration();
echo "<br>";

echo "Anno produzione: " . $pixar->year = '2010';
echo "<br>";

echo "--------------------------";
echo "<br>";

$nolan = new Movie();
echo "Titolo: " . $nolan->title = 'Inception';
echo "<br>";
echo "Titolo originale: " . $nolan->originalTitle = 'Inception';
echo "<br>";
echo "Direttore del film: " . $nolan->directorFilm = 'Christopher Nolan';
echo "<br>";
echo "Genere: " . $nolan->genre = 'Fantasy';
echo "<br>";

$nolan->setDuration('148');
echo "Durata: " . $nolan->getDuration();
echo "<br>";

echo "Anno produzione: " . $nolan->year = '2010';
echo "<br>";