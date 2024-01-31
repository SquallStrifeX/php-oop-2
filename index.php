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
$cane, 'Croccantini', 'Carne');

$prodotto_3 = new Cibo('Almo Nature Cat Daily Lattina', '12', "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg",
$cane, 'Umido', 'Carne');

$prodotto_4 = new Cibo('Mangime per Pesci Guppy in Fiocchi', '22', "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg",
$cane, 'Umido', 'Carne');

$prodotto_5 = new Accessori('Voliera Wilma in Legno', '22', "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg",
$cane, 'Umido', 'Carne');

$prodotto_6 = new Accessori('Cartucce Filtranti per Filtro EasyCrystal', '22', "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg",
$cane, 'Umido', 'Carne');

$prodotto_7 = new Giochi('Kong Classic', '22', "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg",
$cane, 'Umido', 'Carne');

$prodotto_8 = new Giochi('Topini di peluche Trixie', '22', "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg",
$cane, 'Umido', 'Carne');

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
<div class="card" style="width: 18rem;">
  <img class="card-img-top img-responsive" src="<?php echo $prodotto_1->immagine ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $prodotto_1->nome; ?></h5>
    <p><?php echo $prodotto_1->costo. "<br>". $prodotto_1->categoria->$cane. "<br>". $prodotto_1->tipo_di_cibo. "<br>". $prodotto_1->gusto; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    <div class="">  </div>
</body>
</html>
