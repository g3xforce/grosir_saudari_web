<?php
    include 'config.php';
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $modal=$_POST['modal'];
    $harga1=$_POST['harga_1'];
    $harga2=$_POST['harga_2'];
    $harga3=$_POST['harga_3'];
    $jumlah=$_POST['jumlah'];
    $sisa=$_POST['sisa'];


    mysqli_query($konek, "insert into barang values('', '$nama', '$jenis', '$modal', 'harga_1', 'harga_2', 'harga_3', 'jumlah', 'sisa')");
    header("location:barang.php");
?>