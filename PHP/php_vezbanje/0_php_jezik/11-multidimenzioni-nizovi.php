<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Multidimenzioni nizovi</h1>
  <hr>
  <?php 
    // NUMERICKI NIZOVI
    $telefoni = [
                'huawei', 
                'iPhone', 
                'samsung', 
                'xiaomi', 
                'nokia',
              ];
    
    $telefoni = array('huawei', 'iPhone', 'samsung', 'xiaomi', 'nokia');
    
    $telefoni[0] = 'huawei';
    $telefoni[1] = 'iPhone';
    $telefoni[2] = 'samsung';
    $telefoni[3] = 'xiaomi';
    $telefoni[4] = 'nokia';

  // ASOCIJATIVNI NIZOVI
    $kudaNaMore = [
      'gr' => 'greece',
      'cro' => 'hrvatska',
      'ita' => 'italy'
    ];

    echo $kudaNaMore['gr'] . '<hr>';
    echo $kudaNaMore['cro'] . '<hr>';
    echo $kudaNaMore['ita'] . '<hr>';

  // MULTIDIMENZIONI NIZOVI
    $webconEkipa = [
      'Sloba Miric' => [
        'Novi Sad',
        'wordPress developmnet',
        'wordPress'
      ],
      'Danilo Vesovic' => [
        'Sarajevo',
        'back end development',
        'php'
      ],
      'Boban Nalic' => [
        'Backa Palanka',
        'wordPress developmnet',
        'wordPress'
      ],
      'Srdjan Srdjanov' => [
        'Novi Sad',
        'front-end developmnet',
        'javaScript'
      ]
    ];

    echo '<pre>';
      print_r($webconEkipa);
    echo '</pre>';

    echo '<hr>';

    $rezultatiTest = [
      0 => [
        'Petar Dragovic',
        [
          'ocena' => 5
        ]
        ],
      1 => [
        'Mihajlo Popovic',
        [
          'ocena' => 3
        ]
        ],
      2 => [
        'Ermin Spahic',
        [
          'ocena' => 4
        ]
        ],
      3 => [
        'Milica Malovic',
        [
          'ocena' => 2
        ]
        ]
        ];

    echo '<pre>';
          print_r($rezultatiTest);
    echo '</pre>';
  ?>
</body>
</html>