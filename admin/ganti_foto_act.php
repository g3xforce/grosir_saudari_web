<?php
    include 'config.php';
    $user=$_POST['user'];
    $foto=$_FILES['foto']['name'];

    $u=mysqli_query($konek, "select * from admin where username='$user'");
    $us=mysqli_fetch_array($konek, $u);
    if(file_exists("foto/".$us['foto'])){
        unlink("foto/".$us['foto']);
        move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
        mysqli_query($konek, "update admin set foto='$foto' where username='$user'");
        header("location:ganti_foto.php?pesan=oke");
    }else{
        move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
        mysqli_query($konek, "update admin set foto='$foto' where username='$user'");
        header("location:ganti_foto.php?pesan=oke");
    }
?>