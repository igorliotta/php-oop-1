<?php

require_once __DIR__ . ('/Models/Movie.php');
require_once __DIR__ . ('/Models/Serie.php');

// $production1 = new Production('Una notte da leoni', 'italian', 2);
// $production2 = new Production('Harry Potter saga', 'english', 9);
// $production3 = new Production('Limitless', 'french', 7.5);


// Creo un array contenente tutte le produzioni
// $productions = [
//     $production1,
//     $production2,
//     $production3
// ];

// var_dump($productions);

// Sequenza dei vari film impostati con tutti i dati:
$movie1 = new Movie('Il Padrino', 'Italian', 9, 1144234000, 175);
$movie2 = new Movie('Forest Gump', 'English', 9, 700000000, 142);
$movie3 = new Movie('Fight Club', 'English', 8, 63000000, 139);
$movie4 = new Movie('Il Cavaliere Oscuro', 'English', 10, 469000000, 152);
$movie5 = new Movie('2001: Odissea nello spazio', 'French', 7, 367000, 149);

// Sequenza delle varie serie impostate con tutti i dati:
$serie1 = new Serie('Breaking Bad', 'English', 8.5, 5);
$serie2 = new Serie('Game of Thrones', 'English', 8.7, 8);
$serie3 = new Serie('The White Lotus', 'English', 7, 2);
$serie4 = new Serie('You', 'French', 7.8, 5);
$serie5 = new Serie('Grey’s Anatomy', 'Italian', 6.9, 19);

// Creo un'array contenente l'insieme di tutti i film e le serie appena create
$productions = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP - OOP</title>
</head>

<body>
    <header>
        <h1>Production List</h1>.
    </header>
    <main>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">TITLE</th>
                    <th scope="col">LANGUAGE</th>
                    <th scope="col">RATING</th>
                    <th scope="col">PROFIT (&euro;)</th>
                    <th scope="col">DURATION (MIN)</th>
                    <th scope="col">SEASON</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productions as $production) {  ?>
                    <?php $details = $production->getDetailsAsAssociativeArrray(); ?>
                    <tr>
                        <th scope="row"><?php echo $details['title'] ?></th>
                        <td><?php echo $details['language'] ?></td>
                        <td><?php echo $details['rating'] ?></td>
                        <td><?php echo isset($details['profit']) ? $details['profit'] : 'n.a.' ?></td>
                        <td><?php echo isset($details['duration']) ? $details['duration'] : 'n.a.' ?></td>
                        <td><?php echo $details['season'] ?? 'n.a.' ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>