<form action="" method="get">
    <input type="number" name="bil1" id="">
    <input type="number" name="bil2" id="">
    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name="kali" value="kali">
    <input type="submit" name="kurang" value="kurang">
    <input type="submit" name="bagi" value="bagi">
</form>

<?php
    if (isset($_POST["tambah"])) {
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $hasil = $bil1 + $bil2;
        echo $hasil;
    } else if (isset($_POST["kali"])) {
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $hasil = $bil1 - $bil2;
        echo $hasil;
    } else if (isset($_POST["kurang"])) {
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $hasil = $bil1 * $bil2;
        echo $hasil;
    } else if (isset($_POST["bagi"])) {
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $hasil = $bil1 / $bil2;
        echo $hasil;
    }
?>