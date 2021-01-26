<?php
    include 'config.php';
    $id=$_GET['id_barang'];
    mysqli_query($konek, "delete from barang where id_barang='$id'");
    header("location:barang.php");
?>