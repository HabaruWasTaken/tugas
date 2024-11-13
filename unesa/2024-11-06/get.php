<form action="" method="get">
    <h2>Nama:</h2>
    <input type="text" name="nama">
    <h2>Kelas:</h2>
    <input type="text" name="kelas">
    <input type="submit" name="tampil" value="Tampilkan">
</form>

<?php 

    if (isset($_GET['tampil'])){
        $nama = $_GET['nama'];
        $kelas = $_GET['kelas'];

        echo $nama;
        echo '<br>';
        echo $kelas;
    }

?>