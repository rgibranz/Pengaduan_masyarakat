<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head') ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="card mt-5">
                        <div class="card-body">
                        <h1 class="text-center">.:LOGIN ADMIN:.</h1>
                        <form action="<?php echo site_url('login/auth') ?>" method="post">
                        <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" id="username" placeholder ="masukan username">
                        </div>
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder ="masukan password">
                        </div>
                                <input class="form-control btn btn-primary" type="submit" value="masuk">
                            </form>
                            <center>
                                <a href="<?= site_url('registrasi') ?>">registrasi</a>
                            </center>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/script') ?>
</body>
</html>