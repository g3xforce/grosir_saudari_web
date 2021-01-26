<?php

include 'config.php';
$tgl=$_POST['tgl'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

$dt=mysqli_query($konek, "select * from barang where nama='$nama'");
$data=mysqli_fetch_array($konek, $dt);
$sisa=$data['jumlah']-$jumlah;
mysqli_query($konek, "update barang set jumlah='$sisa' where nama='$nama'");

$modal=$data['modal'];
$laba=$harga-$modal;
$labaa=$laba*$jumlah;
$total_harga=$harga*$jumlah;
mysqli_query($konek, "insert into barang_laku values('', '$tgl', '$nama', '$jumlah', '$harga', '$total_harga', '$labaa')")or die(mysqli_error($konek));
header("location:barang_laku.php");

?>