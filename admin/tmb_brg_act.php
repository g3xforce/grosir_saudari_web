<?php
    include 'config.php';
    $id=$_POST['id_barang'];
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $modal=$_POST['modal'];
    $harga1=$_POST['harga_1'];
    $harga2=$_POST['harga_2'];
    $harga3=$_POST['harga_3'];
    $jumlah=$_POST['jumlah'];
    $sisa=$_POST['sisa'];


    mysqli_query($konek, "insert into barang values('$id', '$nama', '$jenis', '$modal', '$harga1', '$harga2', '$harga3', '$jumlah', '$sisa')");
    header("location:barang.php");
?>