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

include __DIR__ . '/db.php';

$avatar = new Movie('Avatar');

$avatar->poster = 'https://i.ebayimg.com/images/g/WGoAAOSw~MhjHE~p/s-l1600.jpg';
$avatar->movieType('Science Fiction');
$avatar->movieType('Action');
$avatar->movieType('Adventure');
$avatar->year = 2009;
$avatar->vote = '4.5/5';
$avatar->movieCast('Sam Worthington');
$avatar->movieCast('Zoe Saldana');
$avatar->movieCast('Sigourney Weaver');
$avatar->director = 'James Cameron';

//var_dump($avatar);



$interstellar = new Movie('Interstellar');

$interstellar->poster = 'https://img.fruugo.com/product/3/71/14270713_max.jpg';
$interstellar->movieType('Science Fiction');
$interstellar->movieType('Action');
$interstellar->movieType('Adventure');
$interstellar->year = 2014;
$interstellar->vote = '3.8/5';
$interstellar->movieCast('Matthew McConaughey');
$interstellar->movieCast('Anne Hathaway');
$interstellar->movieCast('Matt Damon');
$interstellar->director = 'Christopher Nolan';

//var_dump($interstellar);



$lordOfTheRings = new Movie('The Lord Of The Ring\'s: Return Of The King');

$lordOfTheRings->poster = 'https://cdn.europosters.eu/image/1300/posters/the-lord-of-the-rings-the-return-of-the-king-i104633.jpg';
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

//var_dump($lordOfTheRings);



$starWars = new Movie('Star Wars: The Skywalker Saga');

$starWars->poster = 'https://www.iposters.co.uk/media/catalog/product/0/3/0397ST_3.jpg?store=default&image-type=image';
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

//var_dump($starWars);



$movieList = [];

array_push($movieList, $avatar, $interstellar, $lordOfTheRings, $starWars);

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
<body class="bg-dark mt-3 mb-3">
    
    <div class="container text-center">
        <h1 class="text-white m-5">Movie Card's</h1>
        <div class="row">

            <?php foreach ($movieList as $movie) : ?>

            <div class="col-3">
                <div class="card border-0 h-100">
                    <img style="height: 450px;" class="card-img-top" src="<?php echo $movie->poster ?>" alt="">
                    <div class="card-body bg-warning text-start">
                        <h2>Title: <?php echo $movie->title ?></h2>
                        <h5>Type: <?php echo $movie->typeList ?></h5>
                        <h4>Release Year:<?php echo $movie->year ?></h4>
                        <h4 class="d-flex justify-content-start align-items-center">
                            Vote: <?php echo $movie->vote ?>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        </h4>
                        <h5>Cast: <?php echo $movie->castList ?></h5>
                        <h4>Director: <?php echo $movie->director ?></h4>
                    </div>    
                </div>
            </div>

            <?php endforeach ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>