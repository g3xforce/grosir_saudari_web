<?php
    include 'config.php';
    $id_barang=$_GET['id_barang'];
    $jumlah=$_GET['jumlah'];
    $nama=$_GET['nama'];

    $a=mysqli_query($konek, "select jumlah from barang where nama='$nama'");
    $b=mysqli_fetch_array($konek, $a);
    
?>