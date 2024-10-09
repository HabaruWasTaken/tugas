<form action="" method="post">
    <input type="text" name="nama" placeholder="Masukkan nama">
    <input type="text" name="alamat" placeholder="Masukkan alamat">
    <input type="email" name="email" placeholder="Masukkan email">
    <input type="password" name="password" placeholder="Masukkan password">
    <input type="submit" value="kirim" name="tombol">
</form>
<?php
    if (isset($_POST["tombol"])) {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        echo $nama;
        echo $alamat;
        echo $email;
        echo $password;
    }
    echo 'belajar php';
?>