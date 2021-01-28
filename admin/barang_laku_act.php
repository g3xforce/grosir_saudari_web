<?php

    include 'config.php';
    $id = $_POST['id_barang'];
    $tgl = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $harga1 = $_POST['harga_1'];
    $harga2 = $_POST['harga_2'];
    $harga3 = $_POST['harga_3'];
    $jumlah = $_POST['jumlah'];

    $dt=mysqli_query($konek, "select * from barang where nama='$nama'");
    $data=mysqli_fetch_array($dt);
    $sisa=$data['jumlah']-$jumlah;
    mysqli_query($konek, "update barang set jumlah='$sisa' where nama='$nama'");

    $modal=$data['modal'];
    $laba=$harga-$modal;
    $labaa=$laba*$jumlah;
    $total_harga=$harga*$jumlah;
    mysqli_query($konek, "insert into barang_laku values('$id', '$tgl', '$nama', '$jumlah', '$harga', '$total_harga', '$labaa')")or die(mysqli_error($konek));
    header("location:barang_laku.php");

?>