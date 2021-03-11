<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head') ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar') ?>

	<div class="container-fluid">
		<div class="row my-3">
			<div class="col-lg-8 mx-auto ">
				<div class="d-flex d-flex justify-content-between align-items-center">
					<h1>Petugas</h1>
					<a href="<?php echo site_url('admin/tambah_petugas') ?>" class="btn btn-success">Tambah Data</a>
				</div>
				
				<table id="petugas" class="text-center">
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

	<?php $this->load->view('_partials/script') ?>
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