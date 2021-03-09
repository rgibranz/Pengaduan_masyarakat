<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head.php') ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar.php') ?>
	<div class="container-fluid my-4">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header">
						<h4>Petugas</h4>
					</div>

					<div class="card-body">
						<h5 class="card-title">Seluruh petugas/administrator : <?php echo $petugas ?></h5>
    					<p class="card-text">Jumlah Admin : <?php echo $jumlah_admin; ?></p>
    					<p class="card-text">Jumlah petugas : <?php echo $jumlah_petugas; ?></p>
    					<a href="<?php echo site_url('admin/petugas') ?>" class="btn btn-success">Lihat Seluruh Data</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header">
						<h4>Petugas</h4>
					</div>

					<div class="card-body">
						<h5 class="card-title">Seluruh Masyarakat : <?php echo $masyarakat ?></h5>
    					<p class="card-text">Jumlah yang aktif : <?php echo $jumlah_aktif; ?></p>
    					<p class="card-text">Jumlah yang tidak aktif : <?php echo $jumlah_nonaktif; ?></p>
    					<a href="<?php echo site_url('admin/masyarakat') ?>" class="btn btn-success">Lihat Seluruh Data</a>
					</div>
				</div>
			</div>
		</div>


	</div>
	<?php $this->load->view('_partials/script.php') ?>
</body>
</html>