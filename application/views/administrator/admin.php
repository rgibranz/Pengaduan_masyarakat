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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="row">

						<div class="col-lg-4">
							<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Seluruh petugas/administrator : <?php echo $petugas ?></h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Jumlah Admin : <?php echo $jumlah_admin; ?></p>
			    					<p class="card-text">Jumlah petugas : <?php echo $jumlah_petugas; ?></p>
			    					<a href="<?php echo site_url('admin/petugas') ?>" class="btn btn-success">Lihat Seluruh Data</a>
                                </div>
                            </div>
						</div>

						<div class="col-lg-4">
							<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Seluruh Masyarakat : <?php echo $masyarakat ?></h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Jumlah yang aktif : <?php echo $jumlah_aktif; ?></p>
			    					<p class="card-text">Jumlah yang tidak aktif : <?php echo $jumlah_nonaktif; ?></p>
			    					<a href="<?php echo site_url('admin/masyarakat') ?>" class="btn btn-success">Lihat Seluruh Data</a>
                                </div>
                            </div>
						</div>
					</div>


                    

                </div>

                <div class="row">
                	
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
    
    <?php if ($this->session->flashdata('status') == 'login'): ?>
    <script>
        swal("Anda Telah Login", "", "success");
    </script>
    <?php endif ?>

</body>

</html>