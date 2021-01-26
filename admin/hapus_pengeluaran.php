<?php
    include 'config.php';
    $id_barang=$_GET['id_barang'];
    mysqli_query($konek, "delete from pengeluaran where id_barang = 'id'");
    header("location:pengeluaran.php");