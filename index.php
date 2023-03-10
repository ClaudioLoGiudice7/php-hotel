<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
        <h1>Elenco Hotel:</h1>
        <ul>
            <?php foreach($hotels as $hotel) : ?>
                <li>
                    <h3>Nome: <?php echo $hotel ["name"]; ?></h3>
                    <p>Descrizione: <?php echo $hotel ["description"]; ?></p>
                    <p>Parcheggio: <?php echo $hotel ["parking"] ? "Parcheggio disponibile" : "Parcheggio non disponibile"; ?></p>
                    <p>Valutazione: <?php echo $hotel ["vote"]; ?>/5</p>
                    <p>Distanza dal centro: <?php echo $hotel ["distance_to_center"]; ?> km</p>
                </li>
                <?php endforeach ?>
        </ul>
    </div>
</body>
</html>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hotels as $hotel) : ?>
    <tr>
      <th scope="row">1</th>
      <td>Nome: <?php echo $hotel ["name"]; ?></td>
      <td>Descrizione: <?php echo $hotel ["description"]; ?></td>
      <td>Parcheggio: <?php echo $hotel ["parking"] ? "Parcheggio disponibile" : "Parcheggio non disponibile"; ?></td>
      <td>Valutazione: <?php echo $hotel ["vote"]; ?>/5</td>
      <td>Distanza dal centro: <?php echo $hotel ["distance_to_center"]; ?> km</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>