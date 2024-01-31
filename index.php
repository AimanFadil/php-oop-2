<?php

class Prodotto
{
    //Property
    public $cane;
    public $gatto;
    public $uccelli;
    public $pesci;

    function __construct($_cane, $_gatto, $_uccelli, $_pesci)
    {
        $this->cane = $_cane;
        $this->gatto = $_gatto;
        $this->uccelli = $_uccelli;
        $this->pesci = $_pesci;
    }
}
