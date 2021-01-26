<?php
    include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Password</h3>
<br/><br/>
<?php
    if(isset($_GET['pesan'])){
        $pesan=mysqli_real_escape_string($konek, $_GET['pesan']);
        if($pesan=="gagal"){
            echo "<div class='alert alert-danger'>Password gagal di Ganti! Periksa Kembali Password yang anda input</div>";
        }elseif($pesan=="tidaksama"){
            echo "<div class='alert alert-warning'>Password yang anda masukkan tidak sesuai! Silahkan ulangi! </div>";
        }elseif($pesan=="oke"){
            echo "<div class='alert alert-success'>Password yang anda masukkan tidak sesuai! Silahkan ulangi! </div>";
        }
    }
?>
<br/>
<div class="col-md-5 col-md-offset-3">
    <form action="ganti_pass_act.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="user" value="<?php echo $_SESSION['username']; ?>">
        </div>
        <div class="form-group">
            <label>Password Lama</label>
            <input type="password" name="lama" class="form-control" placeholder="Password Lama">
        </div>
        <div class="form-group">
            <label>Password Baru</label>
            <input type="password" name="baru" class="form-control" placeholder="Password Baru">
        </div>
        <div class="form-group">
            <label>Ulangi Password</label>
            <input type="password" name="ulang" class="form-control" placeholder="Ulangi Password">
        </div>
        <div class="form-group">
            <label></label>
            <input type="submit" class="btn btn-info" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Reset">
        </div>
    </form>
</div>

<?php
    include 'footer.php';
?>