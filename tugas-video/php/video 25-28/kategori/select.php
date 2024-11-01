<?php

    $sql = "SELECT * FROM tblkategori ORDER BY kategori ASC";
    $row = $db->getAll($sql);

?>

<h3>Kategori</h3>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($row as $r){
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$r['kategori']?></td>
                <td><?=$r['idkategori']?></td>
                <td><?=$r['idkategori']?></td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>

<a href="?f=kategori&m=insert">Tambah Data</a>