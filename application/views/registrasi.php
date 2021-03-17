<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head') ?>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Registrasi</h1>
                                    </div>
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
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo site_url('registrasi')?>">Registrasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view('_partials/script.php') ?>
</body>
</html>