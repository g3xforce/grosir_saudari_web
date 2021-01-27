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

    mysqli_query($konek, "update barang set nama='$nama', jenis='$jenis', modal='$modal', harga_1='$harga1', harga_2='$harga2', harga_3='$harga3', jumlah='$jumlah', sisa='$sisa' where id_barang='$id'");
    header("location:barang.php");
?>