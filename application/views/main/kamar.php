<div class="position-relative">
	<h2>Master Kamar</h2>
	<p>Ruangan: <?php echo $ruangan ?></p>
	<div class="mt-4" id="kamar">
		<form action="<?php echo base_url('kamar/tambah') ?>" method="POST">
			<div class="form-row mb-3">
				<div class="col-6">
					<input type="text" name="nm_kat_kamar[]" class="form-control" placeholder="Nama Kamar">
				</div>
				<div class="col-2">
					<button class="btn btn-primary" id="tambahKamarBtn" onclick="event.preventDefault();tambahKamar()">+</button>
				</div>
			</div>
			<button class="btn btn-primary">Simpan & Ruangan Selanjutnya</button>
		</form>
	</div>
	<?php if (empty($this->session->ruangan)): ?>
	<div style="background-color: rgba(0, 0, 0, 0.5);top:-15px;left:-15px;right:-15px;bottom:-15px;" class="position-absolute d-flex align-items-center justify-content-center">
		<h4 class="text-light">Silahkan isi ruangan terlebih dahulu.</h4>
	</div>
	<?php endif ?>
</div>