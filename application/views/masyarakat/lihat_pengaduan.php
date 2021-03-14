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
		<div class="row my-5">
			<div class="col-lg-8 mx-auto text-center">
				<?php foreach ($pengaduan as $data): ?>
				<img src="<?php echo base_url('assets/upload/images/').$data->foto; ?>" alt="..." width="70%" class="mx-auto">
				<?php $id = $data->id_pengaduan; ?>
				<div>
					<h3 >pengaduan</h3>
					<p><?php echo $data->tgl_pengaduan ?></p>
				</div>

				<div>
					<p>
						<?php echo $data->isi_laporan ?>
					</p>
				</div>
				<?php endforeach ?>
			</div>	
		</div>

		<div class="row my-5">
			<div class="col-lg-8 mx-auto text-center">
				<?php foreach ($tanggapan as $data): ?>
				<!-- <img src="<?php echo base_url('assets/upload/images/').$data->foto; ?>" alt="..." width="70%" class="mx-auto"> -->
				
				<div>
					<h4>tanggapan oleh <?php echo $data->id_petugas ?> </h4>
					<p><?php echo $data->tgl_tanggapan ?></p>
				</div>

				<div>
					<p>
						<?php echo $data->tanggapan ?>
					</p>
				</div>
				<?php endforeach ?>
			</div>	
		</div>

		
	</div>

	<?php $this->load->view('_partials/script') ?>
</body>
</html>