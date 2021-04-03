<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Konstruktori</h1>
  <hr>
  <?php 
    class zaposleni {
      public $ime;
      public $godinaRodjenja;
      public $brojGodina;

      function __construct($argIme, $argGodinaRodjenja) {
        $this->ime = $argIme;
        $this->godinaRodjenja = $argGodinaRodjenja;
      }

      public function izracunajGodine (){
        $this->brojGodina = date('Y') - $this->godinaRodjenja;
        echo $this->ime . ' ima ' . $this->brojGodina . ' godine.<br>';
      }
    }
    $zaposleni1 = new zaposleni('Slobodan', 1977);
    $zaposleni1 -> izracunajGodine();

    echo '<hr>';
    $zaposleni1 = new zaposleni('Tamara', 1976);
    $zaposleni1 -> izracunajGodine();

  ?>
</body>
</html>