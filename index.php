<?php
require_once __DIR__ . '/classes/Movie.php';

$invictus = new Movie;

$invictus->titolo = "Invictus";
$invictus->regista = "Clint Eastwood";
$invictus->durata = 134;
$invictus->genere = ["drammatico", "sportivo", "biografico"];
$invictus->anno = 2009;

$batman = new Movie;

$superman = new Movie;

$spiderman = new Movie;


$invictus->datiFilm();

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


</body>
</html>