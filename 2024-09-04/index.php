<?php

    $judul = "Belajar PHP";
    $judul1 = "Siswa RPL";
    $judul2 = "SMKN 2 Buduran";
    $juduls = [
        "Belajar PHP",
        "Siswa RPL",
        "SMKN 2 Buduran"
    ];
    
    echo $juduls[0];
    echo $judul1;

    for ($i=0; $i < 3; $i++) { 
        echo "<br>";
        echo $i;
        echo $juduls[$i];
    }

    foreach ($juduls as $key) {
        echo "<br>";
        echo $key;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $judul ?></h1>
    <h2><?= $judul1 ?></h2>
    <h3><?= $judul2 ?></h3>

    <h1><?= $juduls[0] ?></h1>
    <h2><?= $juduls[1] ?></h2>
    <h3><?= $juduls[2] ?></h3>

    <?php
        for ($i=0; $i < 3; $i++) { 
            echo "<h1>";
            echo $juduls[$i];
            echo "</h1>";
        }
    ?>
    <h1>Menampilkan PHP</h1>
    <?php
        for ($i=0; $i < 3; $i++) { 
    ?>
        <h1><?= $juduls[$i]?></h1>
    <?php
        }
    ?>

    <?php
        foreach ($juduls as $key) {
            echo "<h2>";
            echo $key;
            echo "</h2>";
            echo "<br>";
        }
    ?>

    <?php
        foreach ($juduls as $key) { 
    ?>
        <h2><?= $key?></h2>
    <?php
        }
    ?>

    <?php
        for ($i=1; $i <= 10; $i++) {
            if ($i > 6) {
                $num = $i % 6;
                echo  "<h$num>SMKN 2 Buduran</h$num>";
            } else {
                echo  "<h$i>SMKN 2 Buduran</h$i>";
            }
        }
        for ($i=10; $i >= 1; $i--) {
            echo  "<h$i>SMKN 2 Buduran</h$i>";
        }
    ?>
</body>
</html>