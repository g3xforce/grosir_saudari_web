<?php 
include 'header.php';
?>

<?php 
$a = mysqli_query($konek, "select * from barang");
?>

<div class="col-md-10">
	<h3>Selamat datang</h3>
	<h3>Aplikasi Penjualan</h3>
	<h3>Grosir Saudari</h3>
</div>
<!--Kalender-->
<div class="pull-right">
	<div id="kalender"></div>
</div>