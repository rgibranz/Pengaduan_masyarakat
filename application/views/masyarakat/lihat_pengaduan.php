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
                        <h1 class="h3 mb-0 text-gray-800">Halaman Tanggapan</h1>
                    </div>

                    <div class="row">
                    	<?php foreach ($pengaduan as $data): ?>
                    	
						<div class="col-lg-12 mx-auto">
							<div class="card shadow mb-4">
								<img src="<?php echo base_url('assets/upload/images/').$data->foto; ?>" alt="..." width="70%" class="card-img-top">
								<?php $id = $data->id_pengaduan; ?>
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
				    				<span class="small"><?php echo $data->tgl_pengaduan ?></span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $data->isi_laporan ?></p>
                                </div>
                            </div>
						</div>
						<?php endforeach ?>
					</div>

                    <?php foreach ($tanggapan as $data): ?>
	                    <div class="row">

							<div class="col-lg-12">
								<div class="card shadow mb-4">
	                                <div class="card-header">
	                                    <h6 class="m-0 font-weight-bold text-primary">Tanggapan</h6>
					    				<span class="small"><?php echo $data->tgl_tanggapan ?></span>
	                                </div>
	                                <div class="card-body">
	                                    <p class="card-text"><?php echo $data->tanggapan ?></p>
	                                </div>
	                            </div>
							</div>

						</div>
					<?php endforeach ?>
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