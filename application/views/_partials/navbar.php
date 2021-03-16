<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<?php 
			if($this->session->userdata('level') == 'admin'): 
			?>
			<li class="nav-item">
				<a class="btn btn-primary mx-1" href="<?php echo site_url('admin/masyarakat') ?>">Masyarakat</a>
			</li>

			<li>
				<a class="btn btn-primary mx-1" href="<?php echo site_url('admin/petugas') ?>">Petugas</a>
			</li>
			<li>
				<a class="btn btn-danger mx-1" href="<?php echo site_url('login/logout') ?>">logout</a>
			</li>

			<?php 
			elseif($this->session->userdata('level') == 'petugas') :
			?>

			<li>
				<a class="btn btn-primary mx-1"href="<?php echo site_url('Petugas') ?>">Pengaduan</a>
			</li>
			<li>
				<a class="btn btn-danger mx-1" href="<?php echo site_url('login/logout') ?>">logout</a>
			</li>
			<?php 
			elseif($this->session->userdata('level') == 'masyarakat') :
			?>
			<li>
				<a class="btn btn-primary mx-1" href="<?php echo site_url('masyarakat') ?>">Pengaduan</a>
			</li>
			<li>
				<a class="btn btn-primary mx-1" href="<?php echo site_url('masyarakat/tulis_pengaduan') ?>">Tulis Pengaduan</a>
			</li>
			<li>
				<a class="btn btn-danger mx-1" href="<?php echo site_url('login/logout') ?>">logout</a>
			</li>
			<?php 
			endif; 
			?>
		</ul>
	</div>
</nav>