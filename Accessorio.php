<?php

include_once __DIR__ . "/Prodotto.php";
class Accessorio extends Prodotto
{
    //Property
    public $materiale;
    public $larghezza;


    function __construct($_prezzo, $_img, $_nome, $_categoria, $_materiale, $_larghezza)
    {
        parent::__construct($_prezzo, $_img, $_nome, $_categoria);

        $this->materiale = $_materiale;
        $this->larghezza = $_larghezza;
    }

    function getMateriale()
    {
        return $this->materiale;
    }

    function getLarghezza()
    {
        return $this->larghezza;
    }
}
