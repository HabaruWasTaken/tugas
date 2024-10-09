<?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
    }
    echo "<br>";
    for ($i=10; $i >=1 ; $i--) { 
        echo $i;
    }
    echo "<br>";
    $ganjil = 7%2;
    echo $ganjil;
    echo "<br>";
    for ($i=0; $i < 100; $i++) { 
        $ganjil = $i%2;
        if ($ganjil == 1){
            echo $i;
        }
    }

    echo "<br>";
    $kkm = 80;
    $nilai = 75;
    if ($nilai > $kkm) {
        echo "lulus";
    } else {
        echo "tidak lulus";
    }

    echo "<br>";

    $status = "tidak lulus";
    if ($nilai > $kkm) {
        $status = "lulus";
    }
    echo $status;

    echo "<br>";

    $rapot = 0;
    $tugas = 0;

    if ($tugas == 1) {
        $rapot = 80;
    }

    echo $rapot;

    echo "<br>";

    $bulan = 2;
    $tanggal = 30;
    $keterangan = "benar";

    if ($bulan > 0 && $bulan < 13) {
        // $keterangan = "benar";
        if ($tanggal > 0 && $tanggal < 32) {
            
            if (($bulan == 12 && $tanggal >= 22 && $tanggal <= 31) || ($bulan == 1 && $tanggal >= 1 && $tanggal <= 19)) {
                $keterangan = "capricon";
            } else if (($bulan == 1 && $tanggal >= 20 && $tanggal <= 31) || ($bulan == 2 && $tanggal >= 1 && $tanggal <= 18)) {
                $keterangan = "aquarius";
            } else if (($bulan == 2 && $tanggal >= 19 && $tanggal <= 30) || ($bulan == 3 && $tanggal >= 1 && $tanggal <= 20)) {
                $keterangan = "pisces";
            } else if (($bulan == 3 && $tanggal >= 21 && $tanggal <= 31) || ($bulan == 4 && $tanggal >= 1 && $tanggal <= 19)) {
                $keterangan = "aries";
            } else if (($bulan == 4 && $tanggal >= 20 && $tanggal <= 30) || ($bulan == 5 && $tanggal >= 1 && $tanggal <= 20)) {
                $keterangan = "taurus";
            } else if (($bulan == 5 && $tanggal >= 21 && $tanggal <= 31) || ($bulan == 6 && $tanggal >= 1 && $tanggal <= 21)) {
                $keterangan = "gemini";
            } else if (($bulan == 6 && $tanggal >= 22 && $tanggal <= 30) || ($bulan == 7 && $tanggal >= 1 && $tanggal <= 22)) {
                $keterangan = "cancer";
            } else if (($bulan == 7 && $tanggal >= 23 && $tanggal <= 30) || ($bulan == 8 && $tanggal >= 1 && $tanggal <= 22)) {
                $keterangan = "leo";
            } else if (($bulan == 8 && $tanggal >= 23 && $tanggal <= 31) || ($bulan == 9 && $tanggal >= 1 && $tanggal <= 22)) {
                $keterangan = "virgo";
            } else if (($bulan == 9 && $tanggal >= 23 && $tanggal <= 30) || ($bulan == 10 && $tanggal >= 1 && $tanggal <= 23)) {
                $keterangan = "libra";
            } else if (($bulan == 10 && $tanggal >= 24 && $tanggal <= 31) || ($bulan == 11 && $tanggal >= 1 && $tanggal <= 21)) {
                $keterangan = "scorpius";
            } else if (($bulan == 11 && $tanggal >= 22 && $tanggal <= 30) || ($bulan == 12 && $tanggal >= 1 && $tanggal <= 21)) {
                $keterangan = "sagittarius";
            }
        }
    }

    echo $keterangan;
?>