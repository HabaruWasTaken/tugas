<form action="" method="post">
    <input type="number" name="bulan" id="" placeholder="Masukkan bulan">
    <input type="number" name="tanggal" id="" placeholder="Masukkan tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php
    if (isset($_POST["tombol"])) {
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];
        $keterangan = 'salah';
        if ($bulan >= 1 && $bulan <= 12 && $tanggal >= 1 && $tanggal <= 31) {
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

        echo $keterangan;
    }
?>