<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $this->load->view('_partials/head') ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar') ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="card mt-5">
                        <div class="card-body">
                        <h1 class="text-center">Registrasi Petugas</h1>
                        <form action="<?php echo site_url('admin/save_petugas') ?>" method="post">
                        
                        <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" id="nama_petugas" placeholder ="masukan nama lengkap">
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
                        <div class="form-group">
                                <label for="level">level</label>
                                
                                <select name="level">
                                	<option value="admin">Admin</option>
                                	<option value="petugas">petugas</option>
                                	option
                                </select>
                        </div>
                                <input class="form-control btn btn-success" type="submit" value="Daftarkan">
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