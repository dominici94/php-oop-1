<?php
require_once __DIR__ . '/classes/Movie.php';

$movies = [
    $invictus = new Movie("Invictus - L'invincibile", "Clint Eastwood", 134, 2009),
    $batman = new Movie("Batman Begins", "Cristopher Nolan", 140, 2005),
    $superman = new Movie("Superman returns", "Bryan Singer", 154, 2006),
    $spiderman = new Movie("Spider-Man", "Sam Raimi", 121, 2002)
];


// con titolo public:
// $invictus->titolo = "Invictus - L'invincibile";

// con titolo private:
// $invictus->setTitolo("Invictus - L'invincibile pirupiru");

// $invictus->setRegista("Clint Eastwood pirupiru");
// $invictus->setDurata(134);
// $invictus->genere = ["drammatico", "sportivo", "biografico"];
// $invictus->setAnno(2009);


// $batman->setDurata(140);
// $batman->setAnno(2005);


// $superman->setDurata(154);
// $superman->setAnno(2006);


// $spiderman->setDurata(121);
// $spiderman->setAnno(2002);


// echo "<h1>Titolo: {$invictus->getDatiFilm()}</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
</head>
<body>

<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
    <h1>Movies</h1>
    <?php foreach($movies as $movie) { ?>
        <div>
            <h2><?php echo "Titolo: {$movie->getTitolo()}" ?></h2>
            <h3><?php echo "Regista: {$movie->getRegista()}" ?></h3>
            <h3><?php echo "Durata: {$movie->getDurata()} minuti" ?></h3>
            <h3><?php echo "Anno: {$movie->getAnno()}" ?></h3>
            <hr>
        </div>
    <?php } ?>


</body>
</html>