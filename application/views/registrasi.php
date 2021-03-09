<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head') ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card mt-5">
                        <div class="card-body">
                        <h1 class="text-center">Registrasi Masyarakat</h1>
                        <form action="<?php echo site_url('registrasi/register') ?>" method="post">
                        <div class="form-group">
                                <label for="nik">NIK</label>
                                <input class="form-control" type="number" name="nik" id="nik" placeholder ="masukan nik">
                        </div>
                        <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" id="nama" placeholder ="masukan nama lengkap">
                        </div>
                        <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" id="username" placeholder ="masukan username">
                        </div>
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder ="masukan password">
                        </div>
                        <div class="form-group">
                                <label for="telp">Nomor Telepon</label>
                                <input class="form-control" type="text" name="telp" id="telp" placeholder ="08123456789">
                        </div>
                                <input class="form-control btn btn-success" type="submit" value="registrasi">
                            </form>
                            <center>
                                <!-- <a href="http://<?= $server ?>modul/registrasi/">registrasi</a> -->
                            </center>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/script') ?>
</body>
</html>