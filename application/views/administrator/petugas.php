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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary float-left">Kelola Data Petugas</h6>
                            <a href="<?php echo site_url('admin/tambah_petugas')?>" class="float-right btn btn-sm btn-primary">Tambah Petugas</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="petugas" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
											<th>ID</th>
											<th>Nama</th>
											<th>Username</th>
											<th>No. Telpon</th>
											<th>Level</th>
											<th>Aksi</th>
										</tr>
                                    </thead>
                                    <tbody>
	                                    
									<?php foreach ($petugas as $data) :?>
										
										<tr>
											<td><?=$data->id_petugas ?></td>
											<td><?=$data->nama_petugas ?></td>
											<td><?=$data->username ?></td>
											<td><?=$data->telp ?></td>
											<td><?=$data->level ?></td>
											<td>
												<a href="<?= site_url('admin/edit_petugas/'.$data->id_petugas) ?>" class="btn btn-primary">Edit</a>
												<a href="<?= site_url('admin/hapus_petugas/'.$data->id_petugas) ?>" class="btn btn-danger">Hapus</a>
											</td>
										</tr>

									<?php endforeach ?>
                                    </tbody>
                                </table>
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