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
                        <h1 class="h3 mb-0 text-gray-800">Tabel Masyarakat</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Verifikasi Data Masyarakat</h6>
                            <button href="<?php echo site_url('petugas/tambah_petugas')?>" class="float-right">Tambah Petugas</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="masyarakat" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
											<th>Nama</th>
											<th>Username</th>
											<th>Telp</th>
											<th>Status</th>
											<th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
	                                    <?php foreach ($masyarakat as $data):?>
											<tr>
												<td><?php echo $data->nik ?></td>
												<td><?php echo $data->nama ?></td>
												<td><?php echo $data->username ?></td>
												<td><?php echo $data->telp ?></td>
												<td><?php echo $data->status ?></td>
												<td>
													<?php if ($data->status == 'nonAktif'): ?>
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
														  Verifikasi
														</button>

														<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														  <div class="modal-dialog" role="document">
														    <div class="modal-content">
														      <div class="modal-header">
														        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
														        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														      </div>
														      <div class="modal-body">
														        ingin memverifikasi user dengan NIK <?php echo $data->nik ?>
														      </div>
														      <div class="modal-footer">
														        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														        <a href="<?php echo site_url('admin/verifikasi/').$data->nik ?>" type="button" class="btn btn-success">Verifikasi</a>
														      </div>
														    </div>
														  </div>
														</div>
													<?php else: ?>
														<button  class="btn btn-success" disabled>Terverifikasi</button>
													<?php endif ?>
												</td>
											</tr>
										<?php endforeach; ?>
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
		    $('#masyarakat').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ]
		    } );
		} );
	</script>

</body>

</html>