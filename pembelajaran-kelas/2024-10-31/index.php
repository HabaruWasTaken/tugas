<?php

    // array asosiatif
    $identitas = ["Nama" => "Evan Adhiarja Yohanes",
    "Alamat" => "Jl. Kartini Gg. 5 No 1",
    "Telpon" => "085731152881",
    "Email" => "evanadhiarjayohanes@gmail.com",
    "Facebook" => "Shoharu",
    "Instagram" => "shoharu"];

    // array asosiatif
    $sekolah = ["TK" => "TK Cita Buah Hati",
    "SD" => "SD Negeri Pucang 1",
    "SMP" => "SMP Negeri 1 Sidoarjo",
    "SMK" => "SMK Negeri 2 Buduran",
    "S1" => "CIT"];
    
    // array biasa
    $hobi = ["nyanyi", "bermain alat musik", "mendengarkan musik", "melihat orang bermain alat musik", "belajar musik"];
    
    // array asosiatif
    $skill = ["C++" => "Expert",
            "HTML" => "Newbie",
            "CSS" => "Intermediate",
            "PHP" => "Newbie",
            "Javascript" => "Expert",];

    // string
    $deskripsi = "saya manusia yang bodoh dan tidak tahu apa-apa.<br>
                saya belajar sesuai yang saya mau. saya haters orang yang sok baik.<br>
                saya haters orang bodoh yang banyak omong.<br>
                saya haters orang yang sok baik di depan.<br>
                saya orang yang sangat malas.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Riwayat Hidup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Riwayat Hidup</h1>
        <h2>Data Diri</h2>
        <table border=1>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($identitas as $key => $value) {
                        ?>
                        <tr>
                            <td><?=$key?></td>
                            <td><?=$value?></td>
                        </tr>
                        <?php                
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border=1>
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($sekolah as $key => $value) {
                        ?>
                        <tr>
                            <td><?=$key?></td>
                            <td><?=$value?></td>
                        </tr>
                        <?php                
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill Coding</h2>
        <table border=1>
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($skill as $key => $value) {
                        ?>
                        <tr>
                            <td><?=$key?></td>
                            <td><?=$value?></td>
                        </tr>
                        <?php                
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php foreach ($hobi as $key) {
                ?>
                <li><?=$key?></li>
                <?php
            }?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?=$deskripsi?></p>
    </div>
</body>
</html>