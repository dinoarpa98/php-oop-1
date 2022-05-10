<!-- // nome repo: php-oop-1

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php
class Movie {
    public $title;
    public $year;
    
    public function __construct($_title, $_year){
        $this -> title = $_title;
        $this -> year = $_year;
    }

}

$le_iene = new Movie("Le Iene", 1992);

echo $le_iene -> title . " - " . $le_iene -> year ."</p>";

$_pulp = new Movie("Pulp Fiction", 1994);


echo $_pulp -> title . " - " . $_pulp -> year ."</p>";

?>