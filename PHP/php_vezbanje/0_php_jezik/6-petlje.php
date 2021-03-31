<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
<h1>Petlje</h1>
<hr>
<?php 
  echo 'Ucimo petlje' . '<hr>';
  
  

  // $brojac = 0;
  // while($brojac < 7) {
  //   echo "<p>$brojac : Ponavljanje<p>";
  //   $brojac++;
  // }

 

//   for($brojac = 0; $brojac < 10; $brojac++) {
//     echo "<p>$brojac : Ponavljanje<p>";
//   }

 

// $kodiranjeUzivoSredom = ['html', 'css', 'php', 'bootstrap', 'sass', 'wordpress', 'themify', 'elementor'];
// for ($i = 0; $i < count($kodiranjeUzivoSredom); $i++) {
//   echo "<span> $kodiranjeUzivoSredom[$i] </span>";
// }

$porodica = ['Sloba', 'Tamara', 'Jovana', 'Marko'];
foreach($porodica as $clan) {
  echo $clan . '<br>';
}
echo '<hr>';

$webcon = [
  '30 dana ' => 'Sloba Miric',
  'custom wp' => 'Boban Nalic',
  'prakticni veb dizajn' => 'Srdjan Srdjanov'
];

// foreach($webcon as $key => $vaule) {
//   echo $key . " : " . $vaule . '<hr>';
// }
?>
<?php foreach($webcon as $radionica => $predavac) : ?>
  <h3><span><?php echo $radionica; ?></span> <span><?php echo $predavac; ?></span></h3>
<?php endforeach; ?>

</body>
</html>