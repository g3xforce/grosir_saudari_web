<!DOCTYPE html>
<html>
    <head>
        <title>KIOS SAUDARI WEB</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstap.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
        <?php include 'admin/config.php'; ?>
        <style type="text/css">
            .kotak{
                margin-top: 150px;
            }
            .kotak .input-group{
                margin-bottom: 20px;
            }
            #footer {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 50px;
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Login Gagal !! Username dan Password Salah !!</div>";
                    }
                }
            ?>
            <div class="panel panel-default">
                <form action="login_act.php" method="post">
                    <div class="col-md-4 col-md-offset-4 kotak">
                        <h3>Halo Admin</h3>
                        <h2>Silahkan Login</h2>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input type="submit" class="btn btn-primary" value="login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer id="footer">
            <div class="row" align="center">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">GROSIR SAUDARI | Copyright &copy; 2020 | SOLUNA DEVS</div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>