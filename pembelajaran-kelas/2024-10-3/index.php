selesaikan perhitungan ini 7 % 5 + 8 * 4 - 9 / 3 menggunakan function

<?php
    $hasil = kurang(tambah(modulo(7, 5), kali(8, 4)), bagi(9, 3));
    echo '<br>';
    echo $hasil;

    function kali($a, $b) {
        $c = $a * $b;
        return $c;
    }

    echo '<br>';
    echo kali(5, 7) + 5;
    echo '<br>';

    function tambah($a, $b){
        $c = $a + $b;
        return $c;
    }

    echo tambah(5, 5);
    echo '<br>';

    function kurang($a, $b){
        $c = $a - $b;
        return $c;
    }

    echo kurang(10, 5);
    echo '<br>';

    function bagi($a, $b){
        $c = $a / $b;
        return $c;
    }

    echo bagi(10, 5);
    echo '<br>';

    function modulo($a, $b){
        $c = $a % $b;
        return $c;
    }

    echo modulo(10, 2);
    echo '<br>';

?>