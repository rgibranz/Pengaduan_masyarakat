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
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="card mt-5">
                        <div class="card-body">
                        <h1 class="text-center">Form Pengaduan</h1>
                        <form action="<?php echo site_url('masyarakat/save_pengaduan') ?>" method="post" enctype='multipart/form-data'>
                        
                        <div class="form-group">
                                <!-- <label for="isi">isi laporan</label> -->
                                <textarea class="form-control" name="isi" id="isi"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="telp">foto</label>
                                <input class="form-control" type="file" name="image">
                        </div>
                                <input class="form-control btn btn-success" type="submit" value="Kirim Data">
                            </form>
                            <center>
                                <!-- <a href="http://<?= $server ?>modul/registrasi/">registrasi</a> -->
                            </center>
                        </div>
                </div>
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