<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('_partials/head.php') ?>
<head>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('_partials/sidebar.php') ?>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <?php $this->load->view('_partials/navbar.php') ?>
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel Petugas</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="card">
                                    <div class="card-body">
                                    <h1 class="text-center">Edit Petugas</h1>
                                    <form action="<?php echo site_url('admin/update_petugas') ?>" method="post">
											<?php foreach ($petugas as $data): ?>
												
											<?php endforeach ?>
											<div class="form-group">
												<label for="nama_petugas">Nama Lengkap Petugas</label>
												<input type="hidden" name="id_petugas" value="<?php echo $data->id_petugas ?>">
												<input type="text" class="form-control" id="nama_petugas" placeholder="Masukan Nama Petugas" name="nama_petugas" value="<?php echo $data->nama_petugas ?>">
											</div>
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" value="<?php echo $data->username ?>">
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="password"  placeholder="Masukan Password" name="password" value="<?php echo $data->password ?>">
											</div>
											<div class="form-group">
												<label for="telp">Nomor Telepon</label>
												<input type="text" class="form-control" id="telp" placeholder="Enter email" name="telp" value="<?php echo $data->telp ?>">
											</div>
											<div class="form-group">
												<label for="telp">level</label>
												<select name="level" id="">
													<option value="admin" <?php if($data->level == 'admin'){echo 'selected';} ?> >admin</option>
													<option value="petugas" <?php if($data->level == 'petugas'){echo 'selected';} ?> >petugas</option>
												</select>
											</div>
											
											<div class="form-group">
												<button type="submit" class="btn btn-outline-success">Update Data</button>
											</div>	


										</form>
                                        <center>
                                            <!-- <a href="http://<?= $server ?>modul/registrasi/">registrasi</a> -->
                                        </center>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('_partials/footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view('_partials/script.php') ?>
    <script>
        $(document).ready(function() {
            $('#petugas').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>

</body>

</html>