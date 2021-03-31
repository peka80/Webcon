<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
<h1>Asocijativni nizovi</h1>
<hr>
<?php 
  $webconPredavaci = ['30 dana' => 'Slobodan Miric', 'custom wp teme' => 'Boban Nalic'];
  echo '<pre>';
  var_dump($webconPredavaci);
  echo '</pre>';

  echo "<h3>Za 3 nedelje pocinje radionica Custom WP teme i novi predavac je: " . $webconPredavaci["custom wp teme"] . "</h3>";
  echo '<hr>';

  $webconPredavaci['Prakticni web dizajn'] = 'Srdjan Srdjanov';
  var_dump ($webconPredavaci);

?>
</body>
</html>