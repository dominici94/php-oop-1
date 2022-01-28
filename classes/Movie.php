<?php

class Movie {
    private $titolo;
    private $regista;
    private $durata;
    public $genere;
    private $anno;

    // costruttore (che viene lanciato alla costruzione dell'oggetto) definisce argomenti obbligatori in fase di costruzione dell'oggetto

    public function __construct($_titolo, $_regista, $_durata, $_anno)
    {
        $this->setTitolo($_titolo);
        $this->regista = $_regista;
        $this->durata = $_durata;
        $this->anno = $_anno;
    }

    public function setTitolo($_titolo)
    {
        // FORMA DI SICUREZZA per impedire di impostare un titolo < 3 caratteri per esempio e avere maggiore controllo
        if(strlen($_titolo) > 3){
            $this->titolo = $_titolo;
        }
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function setRegista($_regista)
    {
        $this->regista = $_regista;
    }

    public function getRegista()
    {
        return $this->regista;
    }

    public function setDurata($_durata)
    {
        $this->durata = $_durata;
    }

    public function getDurata()
    {
        return $this->durata;
    }

    public function setAnno($_anno)
    {
        $this->anno = $_anno;
    }

    public function getAnno()
    {
        return $this->anno;
    }

    // public function getDatiFilm()
    // {
    //     return "{$this->titolo} {$this->regista} {$this->durata} {$this->anno}";
    // }
}

?>