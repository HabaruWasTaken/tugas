<form action="post2.php" method="post">
    <h2>Nama:</h2>
    <input type="text" name="nama">
    <h2>Kelas:</h2>
    <input type="text" name="kelas">
    <input type="submit" name="tampil" value="Tampilkan">
</form>

<?php 

    if (isset($_POST['tampil'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        echo $nama;
        echo '<br>';
        echo $kelas;
    }

?>