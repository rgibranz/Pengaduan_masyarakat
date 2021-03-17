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

						<div class="col-lg-3">
							<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengaduan Yang Anda Buat : <?php echo $pengaduan ?></h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Belum Di Proses: <?php echo $blm_di_proses; ?></p>
			    					<p class="card-text">Di Proses : <?php echo $di_proses; ?></p>
			    					<p class="card-text">Selesai : <?php echo $selesai; ?></p>
                                </div>
                            </div>
						</div>

						<div class="col-lg-9">
							<div class="card shadow mb-4">
		                        <div class="card-header py-3">
		                            <h6 class="m-0 font-weight-bold text-primary float-left">List Pengaduan Masyarakat</h6>
		                            
		                        </div>
		                        <div class="card-body">
		                            <div class="table-responsive">
		                                <table class="table table-bordered" id="masyarakat" width="100%" cellspacing="0">
		                                    <thead>
												<tr>
													<th>ID</th>
													<th>Tanggal</th>
													<th>ISI</th>
													<th>Foto</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php foreach ($list_pengaduan as $data): ?>
													
												
												<tr>
													<td><?php echo $data->id_pengaduan?></td>
													<td><?php echo $data->tgl_pengaduan?></td>
													<td><?php echo $data->isi_laporan?></td>
													<td><img src="<?php echo base_url('assets/upload/images/').$data->foto?>" alt="" width="50"></td>
													<td>
														<?php if($data->status == '0'): ?>
															<button class="btn btn-secondary" disabled>Menunggu</button>
														<?php elseif($data->status == 'proses'): ?>
															<button class="btn btn-primary" disabled>Diproses</button>
														<?php elseif($data->status == 'selesai'): ?>
															<button class="btn btn-success" disabled>Selesai</button>

														<?php endif ?>
													</td>
													<td>
														<a href="<?php echo site_url('masyarakat/edit_pengaduan/').$data->id_pengaduan ?>"class="btn btn-primary">edit</a><br>
														<a href="<?php echo site_url('masyarakat/hapus_pengaduan/').$data->id_pengaduan ?>" class="btn btn-danger">hapus</a>
														<a href="<?php echo site_url('masyarakat/lihat_pengaduan/').$data->id_pengaduan ?>" class="btn btn-danger">lihat</a>

													</td>
													
												</tr>

												<?php endforeach ?>
											</tbody>
		                                </table>
		                            </div>
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