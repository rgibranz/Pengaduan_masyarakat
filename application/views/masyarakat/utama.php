<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $this->load->view('_partials/head') ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar') ?>
	
	<div class="container-fluid">
		<div class="row my-5">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-header">
						<h4>Petugas</h4>
					</div>

					<div class="card-body">
						<h5 class="card-title">Pengaduan Yang Anda Buat : <?php echo $pengaduan ?></h5>
    					<p class="card-text">Belum Di Proses: <?php echo $blm_di_proses; ?></p>
    					<p class="card-text">Di Proses : <?php echo $di_proses; ?></p>
    					<p class="card-text">Selesai : <?php echo $selesai; ?></p>
    					
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<table id="pengaduan" class="text-center">
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
							<td><img src="<?php echo base_url('assets/upload/foto/').$data->foto?>" alt=""></td>
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
								<a class="btn btn-primary">edit</a><br>
								<a class="btn btn-danger">hapus</a>

							</td>
							
						</tr>

						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php $this->load->view('_partials/script') ?>
	<script>
		$(document).ready(function() {
		    $('#pengaduan').DataTable();
		} );
		
	</script>
</body>
</html>