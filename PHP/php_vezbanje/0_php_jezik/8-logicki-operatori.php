<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Logicki operatori</h1>
  <hr>
  <ol>
      <li>&&  i</li>
      <li>||  ili</li>
      <li>!=  ili</li>
    </ol>
  <?php 
    $korisnickoIme = 'Slobex';
    $jmbg = '2808980820089';
    $lk = '3261033';
    $godine = 18;
    if ($korisnickoIme == 'Slobex' && $jmbg = '28089808200' && $lk == '3261033'){
      echo "$korisnickoIme uspesno ste se ulogovali";
    } else {
      echo "$korisnickoIme nesto ne valja, pokusajte ponovo.";
    }

    echo '<hr>';

    if ($godine != 43) {
      echo "Matori ste i svakako nemate 18 leta.";
    } else {
      echo "Nije ovaj portal za klincadiju.";
    }

    echo '<hr>';

    $firma = 'webcon radionice';
    $pib = '105802177';

    ?>

    <?php if ($firma == 'webcon radionice' && $pib == '105802177') : ?>
      <form action="">
        <input type="text" placeholder="Unesite ime pravnog lica">
        <input type="text" placeholder="Unesite PIB">
      </form>
    <?php endif; ?>
</body>
</html>