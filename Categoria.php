<?php
include_once __DIR__ . "/Prodotto.php";
class Categoria
{
    public $animale;
    public $animaleIcona;

    function __construct($_animale, $_animaleIcona)
    {
        $this->animale = $_animale;
        $this->animaleIcona = $_animaleIcona;
    }

    function getOneAnimale()
    {
        return $this->animale;
    }
    function getOneAnimaleIcona()
    {
        return $this->animaleIcona;
    }
}
