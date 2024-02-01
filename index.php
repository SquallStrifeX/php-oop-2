<?php
class Prodotto {
    public $nome;
    public $costo;
    public $immagine;
    public $categoria;

    function __construct($nome, $costo, $immagine, Categoria $categoria) {
        $this->nome = $nome;
        $this->costo = $costo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}

class Categoria {
    public $categoria;
    public $colore;

    function __construct($categoria,) {
        $this->categoria = $categoria;

    }}
    
$cane = new Categoria('Cane');
$gatto = new Categoria('Gatto');
$pesce = new Categoria('Pesce');
$uccello = new Categoria('Uccello');






class Cibo extends Prodotto {
    public $tipo_di_cibo;
    public $gusto;
    
    function __construct($nome, $costo, $immagine, $categoria, $tipo_di_cibo, $gusto){
        parent::__construct($nome, $costo, $immagine, $categoria);
        $this->tipo_di_cibo = $tipo_di_cibo;
        $this->gusto = $gusto;
    }
}

class Giochi extends Prodotto {
    public $tipologia;
    public $materiale;
    function __construct($nome, $costo, $immagine, $categoria, $tipologia, $materiale){
        parent::__construct($nome, $costo, $immagine, $categoria);
        $this->tipologia = $tipologia;
        $this->materiale = $materiale;
    }
}

class Accessori extends Prodotto {
    public $made_in;
    public $dimensione;
    function __construct($nome, $costo, $immagine, $categoria, $made_in, $dimensione){
        parent::__construct($nome, $costo, $immagine, $categoria);
        $this->made_in = $made_in;
        $this->dimensione = $dimensione;
    }
}


$prodotto_1 = new Cibo('Royal Canin Mini Adult', '25', "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg",
$cane, 'Croccantini', 'Carne');

$prodotto_2 = new Cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '15', "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg",
$cane, 'Umido', 'Pollo');

$prodotto_3 = new Cibo('Almo Nature Cat Daily Lattina', '12', "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg",
$gatto, 'Umido', 'Carne');

$prodotto_4 = new Cibo('Mangime per Pesci Guppy in Fiocchi', '17', "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg",
$pesce, 'Umido', 'Pesce');

$prodotto_5 = new Accessori('Voliera Wilma in Legno', '14', "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg",
$uccello, 'Cina', '12x14x178');

$prodotto_6 = new Accessori('Cartucce Filtranti per Filtro EasyCrystal', '75', "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg",
$cane, 'America', '14x12');

$prodotto_7 = new Giochi('Kong Classic', '24', "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg",
$cane, 'Gioco', 'Plastica');

$prodotto_8 = new Giochi('Topini di peluche Trixie', '220', "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg",
$gatto, 'Gioco', 'Plastica');

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Documento</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_1->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_1->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_1->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_1->categoria->categoria . "<br>" 
                        . "Tipologia: ". $prodotto_1->tipo_di_cibo . "<br>" . "Gusto: ". $prodotto_1->gusto; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_2->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_2->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_2->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_2->categoria->categoria . "<br>" 
                        . "Tipologia: ". $prodotto_2->tipo_di_cibo . "<br>" . "Gusto: ". $prodotto_2->gusto; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_3->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_3->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_3->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_3->categoria->categoria . "<br>" 
                        . "Tipologia: ". $prodotto_3->tipo_di_cibo . "<br>" . "Gusto: ". $prodotto_3->gusto; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_4->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_4->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_4->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_4->categoria->categoria . "<br>" 
                        . "Tipologia: ". $prodotto_4->tipo_di_cibo . "<br>" . "Gusto: ". $prodotto_4->gusto; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_5->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_5->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_5->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_5->categoria->categoria . "<br>" 
                        . "Made in: ". $prodotto_5->made_in . "<br>" . "Dimensione: ". $prodotto_5->dimensione; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_6->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_6->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_6->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_6->categoria->categoria . "<br>" 
                        . "Made in: ". $prodotto_6->made_in . "<br>" . "Dimensione: ". $prodotto_6->dimensione; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_7->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_7->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_7->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_7->categoria->categoria . "<br>" 
                        . "Tipologia: ". $prodotto_7->tipologia . "<br>" . "Materiale: ". $prodotto_7->materiale; ?></p>
                    </div>
            </div>
            </div>
            <div class="col-3 my-3">
                                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-responsive" src="<?php echo $prodotto_8->immagine ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto_8->nome; ?></h5>
                        <p><?php echo "Il costo è di ". $prodotto_8->costo . "€ <br>" . "Questo prodotto è per: ". $prodotto_8->categoria->categoria . "<br>" 
                        . "Tipologia: ". $prodotto_8->tipologia . "<br>" . "Materiale: ". $prodotto_8->materiale; ?></p>
                    </div>
            </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
