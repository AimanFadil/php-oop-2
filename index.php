<?php


include __DIR__ . "/Accessorio.php";
include __DIR__ . "/Gioco.php";

include __DIR__ . "/Cibo.php";
include __DIR__ . "/Categoria.php";

$cani = new Categoria('Cane', 'fas fa-dog');
$gatti = new Categoria('Gatto', 'fas fa-cat');
$uccelli = new Categoria('Uccelli', 'fas fa-dove');
$pesci = new Categoria('Pesci', 'fas fa-fish');



$royal = new Cibo('Prezzo ' . 12.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'RoyalCanin Mini', $cani->getOneAnimale() . ' <i class="' . $cani->getOneAnimaleIcona() . '"></i>',  23 . '/' . 03 . '/' . 2024, '10kg');
$almoC = new Cibo('Prezzo ' . 16.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Natural', $cani->getOneAnimale() . ' <i class="' . $cani->getOneAnimaleIcona() . '"></i>', 21 . '/' . 04 . '/' . 2024, '12kg');
$almoG = new Cibo('Prezzo ' . 7.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Natural', $gatti->getOneAnimale() . ' <i class="' . $gatti->getOneAnimaleIcona() . '"></i>', 16 . '/' . 02 . '/' . 2024, '500g');
$tetra = new Cibo('Prezzo ' . 4.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Guppy Mini Flakes', $pesci->getOneAnimale() . ' <i class="' . $pesci->getOneAnimaleIcona() . '"></i>', 19 . '/' . 06 . '/' . 2024, '500g');

$voliera = new Accessorio('Prezzo ' . 120.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera', $uccelli->getOneAnimale() . ' <i class="' . $uccelli->getOneAnimaleIcona() . '"></i>', 'legno e alluminio', '3m');
$filtro = new Accessorio('Prezzo ' . 40.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Filtro acquario', $uccelli->getOneAnimale() . ' <i class="' . $uccelli->getOneAnimaleIcona() . '"></i>', 'cotone e plastica', '20cm');

$topo = new Gioco('Prezzo ' . 8.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topolino peluche', $gatti->getOneAnimale() . ' <i class="' . $gatti->getOneAnimaleIcona() . '"></i>', 'grigio, nero e rosa', true);
$kong = new Gioco('Prezzo ' . 9.90 . '$', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong', $cani->getOneAnimale() . ' <i class="' . $cani->getOneAnimaleIcona() . '"></i>', 'rosso', false);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <div class="card-title text-center">
                                <h5><?php echo $royal->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $royal->getImg() ?></p>" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $royal->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $royal->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Dal peso di : ' . $royal->getPeso() ?></p>
                                <p class="card-text "><?php echo 'Scadenza : ' . $royal->getScadenza() ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-title text-center">
                                <h5><?php echo $almoC->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $almoC->getImg() ?>" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $almoC->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $almoC->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Dal peso di : ' . $almoC->getPeso() ?></p>
                                <p class="card-text "><?php echo 'Scadenza : ' . $almoC->getScadenza() ?></p>
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
                            <div class="card-title text-center">
                                <h5><?php echo $almoG->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $almoG->getImg() ?>" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $almoG->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $almoG->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Dal peso di : ' . $almoG->getPeso() ?></p>
                                <p class="card-text "><?php echo 'Scadenza : ' . $almoG->getScadenza() ?></p>
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
                            <div class="card-title text-center">
                                <h5><?php echo $tetra->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $tetra->getImg() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $tetra->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $tetra->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Dal peso di : ' . $tetra->getPeso() ?></p>
                                <p class="card-text "><?php echo 'Scadenza : ' . $tetra->getScadenza() ?></p>
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
                            <div class="card-title text-center">
                                <h5><?php echo $kong->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $kong->getImg() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $kong->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $kong->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Colori : ' . $kong->getColore() ?></p>
                                <p class="card-text text-danger"><?php echo $kong->getRiciclato() ?></p>
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
                            <div class="card-title text-center">
                                <h5><?php echo $topo->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $topo->getImg() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $topo->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $topo->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Colori : ' . $topo->getColore() ?></p>
                                <p class="card-text text-success"><?php echo $topo->getRiciclato() ?></p>
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
                            <div class="card-title text-center">
                                <h5><?php echo $voliera->getNome() ?><h5>
                            </div>
                            <img src="<?php echo $voliera->getImg() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $voliera->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $voliera->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Larghezza : ' . $voliera->getLarghezza() ?></p>
                                <p class="card-text "><?php echo 'Composto da : ' . $voliera->getMateriale() ?></p>

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
                            <div class="card-title text-center">
                                <h5><?php echo $filtro->getNome() ?></h5>
                            </div>
                            <img src="<?php echo $filtro->getImg() ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-success"><?php echo $filtro->getPrezzo() ?></p>
                                <p class="card-text "><?php echo 'Prodotto per : ' . $filtro->getCategoria() ?></p>
                                <p class="card-text "><?php echo 'Larghezza : ' . $filtro->getLarghezza() ?></p>
                                <p class="card-text "><?php echo 'Composto da : ' . $filtro->getMateriale() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>