<?php
    require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
        <h1>Ini adalah header</h1>
        <li><a href="?">home</a></li>
        <?php
            foreach ($pages as $key => $value) {
        ?>
            <li><a href="?joni=<?= $value?>"><?= $key?></a></li>
        <?php
            }
        ?>
    </div>
    <div class="content">
        <h1>Ini adalah konten</h1>
        <?php
            if (isset($_GET["joni"])){
                $siti = $_GET["joni"];
                if ($siti == "contact") {
                    require_once('pages/contact.php');
                }
                if ($siti == "jurusan") {
                    require_once('pages/jurusan.php');
                }
                if ($siti == "sejarah") {
                    require_once('pages/sejarah.php');
                }
                if ($siti == "prestasi") {
                    require_once('pages/prestasi.php');
                }
            } else {
                echo "Variabel page belum ada isinya";
            }
        ?>
    </div>
    <div class="footer">
        <h1>Ini adalah footer</h1>
    </div>

    <!-- <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="pages/jurusan.php">Jurusan</a></li>
        <li><a href="pages/sejarah.php">Sejarah</a></li>
        <li><a href="pages/contact.php">Kontak</a></li>
    </ul> -->

    <?php
        foreach ($gambars as $key) {
    ?>        
        <img src="images/<?= $key?>" alt="" srcset="">
    <?php     
        }
    ?>
</body>
</html>