<?php
include_once __DIR__ . "/Prodotto.php";
class Gioco extends Prodotto
{
    //Property
    public $colore;
    public $riciclato;


    function __construct($_prezzo, $_img, $_nome, $_categoria, $_colore, $_riciclato)
    {
        parent::__construct($_prezzo, $_img, $_nome, $_categoria);

        $this->colore = $_colore;
        $this->riciclato = $_riciclato;
    }
    function getColore()
    {
        return $this->colore;
    }

    function getRiciclato()
    {

        if ($this->riciclato) {
            return "Il materiale di questo prodotto è riciclato";
        } else {
            return "Il materiale di questo prodotto non è riciclato";
        }
    }
}
