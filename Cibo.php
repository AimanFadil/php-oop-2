<?php
include_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto
{
    //Property
    public $scadenza;
    public $peso;


    function __construct($_prezzo, $_img, $_nome, $_categoria, $_scadenza, $_peso)
    {
        parent::__construct($_prezzo, $_img, $_nome, $_categoria);

        $this->scadenza = $_scadenza;
        $this->peso = $_peso;
    }

    function getScadenza()
    {
        return $this->scadenza;
    }

    function getPeso()
    {
        return $this->peso;
    }
}
