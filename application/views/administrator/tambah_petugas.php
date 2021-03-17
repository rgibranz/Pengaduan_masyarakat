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