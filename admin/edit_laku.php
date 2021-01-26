<?php
    include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"> Edit Barang</span></h3>
<a class="btn" href="barang_laku.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>

<?php
    $id_barang=mysqli_real_escape_string($konek, $_GET['id_barang']);
    $det=mysqli_query($konek, "select * from barang_laku where id='$id_barang'")or die(mysqli_error($konek));
    while($d=mysqli_fetch_array($det)){
?>
    <form action="update_laku.php">
        <table class="table">
            <tr>
                <td></td>
                <td><input type="hidden" name="id_barang" value="<?php echo $d['id_barang'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="text" name="tgl" class="form-control" id="tgl" autocomplete="off" value="<?php echo $d['tanggal'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <select name="nama" class="form-control">
                    <?php
                    $brg=mysqli_query($konek, "select * from barang");
                    while($b=mysqli_fetch_array($konek, $brg)){
                        ?>
                        <option <?php if($d['nama']==$b['nama']){echo "selected"; } ?> value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga 1</td>
                <td><input type="text" class="form-control" name="harga1" value="<?php echo $d['harga1'] ?>"></td>
            </tr>
            <tr>
                <td>Harga 2</td>
                <td><input type="text" class="form-control" name="harga1" value="<?php echo $d['harga2'] ?>"></td>
            </tr>
            <tr>
                <td>Harga 3</td>
                <td><input type="text" class="form-control" name="harga1" value="<?php echo $d['harga3'] ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" class="form-control" value="<?php echo $d['jumlah'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-info" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
}
?> 
<script type="text/javascript">
    $(document).ready(function(){
        $('#tgl').datepicker({dateFormat: 'yy/mm/dd'});
    });
</script>