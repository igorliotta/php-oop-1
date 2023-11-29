<?php

require_once __DIR__ . ('/Models/Production.php');

$production1 = new Production('Una notte da leoni', 'italian', 2);
$production2 = new Production('Harry Potter saga', 'english', 9);
$production3 = new Production('Limitless', 'french', 7.5);


// Creo un array contenente tutte le produzioni
$productions = [
    $production1,
    $production2,
    $production3
];

// var_dump($productions);

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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productions as $production) { ?>
                    <tr>
                        <th scope="row"><?php echo $production->title ?></th>
                        <td><?php echo $production->language ?></td>
                        <td><?php echo $production->rating ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>