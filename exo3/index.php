<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 3</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 3</h1>
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : 
                index.php?startDate=2/05/2016&endDate=27/11/2016</p>
        </div>
    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
            <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Pour voir !</a>
                <?php
                // if (isset($_GET['startDate']) and isset($_GET['endDate'])) 
                // {
                //     echo $_GET['startDate'] . ' / ' . $_GET['endDate'];
                // }
                // else {
                //     echo 'Faux';
                // }
                $startDate = filter_input(INPUT_GET, 'startDate' , FILTER_SANITIZE_SPECIAL_CHARS);
                $endDate = filter_input(INPUT_GET, 'endDate' , FILTER_SANITIZE_SPECIAL_CHARS);
                if ($startDate && $endDate) {
                    var_dump($startDate.' // ' .$endDate);
                }else{
                    echo 'il manque une date';
                }
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>