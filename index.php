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

    function __construct($categoria) {
        $this->categoria = $categoria;
    }
}

// Crea istanze di Categoria
$cane = new Categoria('Cane');
$gatto = new Categoria('Gatto');
$pesce = new Categoria('Pesce');
$uccello = new Categoria('Uccello');

class Cibo extends Prodotto {
    // ... (resto del codice Cibo)
}

// ... (definizioni delle altre classi)

$prodotto_1 = new Cibo('Royal Canin Mini Adult', '25', "https://link_immagine.jpg", $cane, 'Croccantini', 'Carne');
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    <div class=""> <?php echo $prodotto_1->nome; ?> </div>
</body>
</html>
