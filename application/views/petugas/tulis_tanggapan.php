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
			<div class="col-lg-12 mx-auto text-center">
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

		<?php foreach ($tanggapan as $data): ?>
		<div class="row my-5">
			<div class="col-lg-12 mx-auto">
				
				

				<div class="card">
				  
				  <div class="card-header">
				    <h6>Tanggapan</h6>
				    <span><?php echo $data->tgl_tanggapan ?></span>
				  </div>
				  <div class="card-body">
				    <p class="card-text"><?php echo $data->tanggapan ?></p>
				  </div>
				</div>

				
			</div>	
		</div>
		<?php endforeach ?>

		<div class="row">
			<div class="col-lg-12 mx-auto">
				<center>
					<h3>Tulis Tanggapan</h3>
				</center>
				<form action="<?php echo site_url('petugas/save_tanggapan') ?>" method="post" enctype='multipart/form-data'>
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
		            <div class="form-group">
		                    <!-- <label for="isi">isi laporan</label> -->
		                    <textarea class="form-control" name="isi" id="isi"></textarea>
		            </div>
		     
                    <input class="form-control btn btn-success" type="submit" value="Kirim Data">
                </form>
			</div>
		</div>
	</div>

	<?php $this->load->view('_partials/script') ?>
	<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'isi' );
    </script>
</body>
</html>