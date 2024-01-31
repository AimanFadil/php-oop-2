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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-4  pt-3">
                    <h1>PETS WORLD</h1>
                </div>
                <div class="col-8  pt-3">
                    <h1>TUTTO QUELLO DI CUI HAI BISOGNO</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">

                <div class="col-12 text-success pt-3 text-center">
                    <h2>PRODOTTI</h2>
                </div>
                <div class="col-12 text-danger pt-3 text-center">
                    <h3>CIBO</h3>
                </div>
                <div class="col-12 py-4">
                    <h4>Croccantini per cani</h4>
                </div>
                <div class="d-flex">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-4">
                    <h4>Scatolette per gatti</h4>
                </div>
                <div class="d-flex">
                    <div class="col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-4">
                    <h4>Mangime per pesci</h4>
                </div>
                <div class="d-flex">
                    <div class="col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-danger pt-3 text-center">
                    <h3>GIOCHI</h3>
                </div>
                <div class="col-12 py-4">
                    <h4>Giochi per cani</h4>
                </div>
                <div class="d-flex">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-4">
                    <h4>Giochi per gatti</h4>
                </div>
                <div class="d-flex">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-danger pt-3 text-center">
                    <h3>ACCESSORI</h3>
                </div>
                <div class="col-12 py-4">
                    <h4>Accessori per ucelli</h4>
                </div>
                <div class="d-flex">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-4">
                    <h4>Accessori per pesci</h4>
                </div>
                <div class="d-flex">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>