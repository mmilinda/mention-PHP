<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Moyenne PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand w-100 bg-primary">
        <h1 class="text-center text-white">Calculer une moyenne en PHP</h1>
    </nav>

    <?php

    $moyenneEspagnol = 10;
    $moyenneMaths = 9;
    $moyenneFrancais = 12;
    $moyenneHistoireGeo = 15;
    
    // Effectif total est de 4 car nous avons 4 variables .

    $calculEffectif = $moyenneEspagnol + $moyenneMaths + $moyenneFrancais + $moyenneHistoireGeo;

    echo $calculEffectif;

    $moyenne = $calculEffectif /4;

    echo '<br>';

    echo "Ma moyenne est de ".$moyenne."/20";



    ?>
    
</body>
</html>