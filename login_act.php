<?php
    session_start();
    include 'admin/config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pas=md5($password);
    $query=mysqli_query($konek, "select * from admin where username='$username' and password='$pas'")or die(mysqli_error(@$konek));
    if(mysqli_num_rows($query)==1){
        $_SESSION['username']=$username;
        header("location:admin/index.php");
    }else{
        header("location:index.php?pesan=gagal")or die(mysqli_error($konek));
        //mysql_error();
    }
    // echo $pas;
?>