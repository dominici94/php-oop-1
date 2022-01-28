<?php

class Movie {
    public $titolo;
    public $regista;
    public $durata;
    public $genere;
    public $anno;

    public function datiFilm(){
        echo "{$this->titolo} {$this->regista} {$this->durata} {$this->anno}";
    }
}

?>