<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/

class Movie
{
    public $title = null;
    public $type = [];
    public $year;
    public $vote;
    public $cast = [];
    public $director;

    public function __construct($title) {
        $this->title = $title;
    }

    public function title() {
        return $this->title;
    }

    public function movieType($genre) {
        array_push($this->type, $genre);
    }

    public function movieCast($actor) {
        array_push($this->cast, $actor);
    }

}

$avatar = new Movie('Avatar');

$avatar->movieType('Science Fiction');
$avatar->movieType('Action');
$avatar->movieType('Adventure');
$avatar->year = 2009;
$avatar->vote = '4.5/5';
$avatar->movieCast('Sam Worthington');
$avatar->movieCast('Zoe Saldana');
$avatar->movieCast('Sigourney Weaver');
$avatar->director = 'James Cameron';

var_dump($avatar);



$interstellar = new Movie('Interstellar');

$interstellar->movieType('Science Fiction');
$interstellar->movieType('Action');
$interstellar->movieType('Adventure');
$interstellar->year = 2014;
$interstellar->vote = '3.8/5';
$interstellar->movieCast('Matthew McConaughey');
$interstellar->movieCast('Anne Hathaway');
$interstellar->movieCast('Matt Damon');
$interstellar->director = 'Christopher Nolan';

var_dump($interstellar);



$lordOfTheRings = new Movie('Lord Of The Ring\'s: Return Of The King');

$lordOfTheRings->movieType('Fantasy');
$lordOfTheRings->movieType('Action');
$lordOfTheRings->movieType('Adventure');
$lordOfTheRings->movieType('Dramatic');
$lordOfTheRings->year = 2004;
$lordOfTheRings->vote = '4.8/5';
$lordOfTheRings->movieCast('Elijah Wood');
$lordOfTheRings->movieCast('Ian McKellen');
$lordOfTheRings->movieCast('Viggo Mortensen');
$lordOfTheRings->movieCast('Sean Austin');
$lordOfTheRings->director = 'Peter Jackson';

var_dump($lordOfTheRings);



$starWars = new Movie('Star Wars: The Skywalker Saga');

$starWars->movieType('Science Fiction');
$starWars->movieType('Action');
$starWars->movieType('Adventure');
$starWars->movieType('Dramatic');
$starWars->year = 1977;
$starWars->vote = '4.4/5';
$starWars->movieCast('Mark Hamill');
$starWars->movieCast('Harrison Ford');
$starWars->movieCast('Carrie Fisher');
$starWars->movieCast('Ian McDiarmid');
$starWars->director = 'George Lucas';

var_dump($starWars);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <div class="container">
        <h1></h1>
        <div class="row">
            <div class="col-3">
                <div class="card"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>