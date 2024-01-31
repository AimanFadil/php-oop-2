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

class cibo extends prodotto
{
    //Property
    public $croccantini;
    public $scatola;
    public $mangime;

    function __construct($_cane, $_gatto, $_uccelli, $_pesci, $_croccantini, $_scatola, $_mangime)
    {
        parent::__construct($_cane, $_gatto, $_uccelli, $_pesci);

        $this->croccantini = $_croccantini;
        $this->scatola = $_scatola;
        $this->mangime = $_mangime;
    }
}

class accessorio extends prodotto
{
    //Property
    public $voliera;
    public $filtro;


    function __construct($_cane, $_gatto, $_uccelli, $_pesci, $_voliera, $_filtro)
    {
        parent::__construct($_cane, $_gatto, $_uccelli, $_pesci);

        $this->voliera = $_voliera;
        $this->filtro = $_filtro;
    }
}

class gioco extends prodotto
{
    //Property
    public $mouse;
    public $kong;


    function __construct($_cane, $_gatto, $_uccelli, $_pesci, $_mouse, $_kong)
    {
        parent::__construct($_cane, $_gatto, $_uccelli, $_pesci);

        $this->mouse = $_mouse;
        $this->kong = $_kong;
    }
}
