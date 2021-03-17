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
                        <h1 class="h3 mb-0 text-gray-800">Halaman Pengaduan</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <?php foreach ($pengaduan as $data): ?>
                                <center>
                                    <h3>Tulis Pengaduan</h3>
                                </center>
                                <form action="<?php echo site_url('masyarakat/save_pengaduan') ?>" method="post" enctype='multipart/form-data'>
                                    
                                    <div class="form-group">
                                        <!-- <label for="isi">isi laporan</label> -->
                                        <textarea class="form-control" name="isi" id="isi"><?php echo $data->isi_laporan ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="telp">foto</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                    <input type="hidden" name="old_image" value="<?php echo $data->foto ?>">
                                    <input type="hidden" name="id_pengaduan" value="<?php echo $data->id_pengaduan ?>">
                                    <input class="form-control btn btn-success" type="submit" value="Kirim Data">
                                </form>
                            <?php endforeach ?>
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
    
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'isi' );
    </script>
</body>

</html>