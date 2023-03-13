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
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TITLE -->
    <title>PHP Hotel</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="./js/app.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Gestione hotel</h1>
                <div class="card">
                    <div class="card-header">
                        <h2>Elenco hotel disponibili</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> 
                                            <b>#</b></th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Descrizione</th>
                                        <th scope="col">Parcheggio</th>
                                        <th scope="col">Valutazione</th>
                                        <th scope="col">Distanza dal centro</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach($hotels as $key => $hotel) : ?>
                                    <tr>
                                        <th scope="row"><?= $key + 1 ?></th>
                                        <td><?= $hotel["name"] ?></td>
                                        <td><?= $hotel["description"] ?></td>
                                        <td><?= $hotel["parking"] ? "Sì" : "No" ?></td>
                                        <td><?= $hotel["vote"] ?></td>
                                        <td><?= $hotel["distance_to_center"] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>