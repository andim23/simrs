<h2>Master Ruangan</h2>
<div class="mt-4" id="ruangan">
	<?php echo form_open_multipart('ruangan/tambah');?>
	<div class="form-row mb-3">
		<div class="col-6">
			<input type="text" name="nama_ruangan[]" class="form-control" placeholder="Nama Ruangan">
		</div>
		<div class="col-4 custom-file">
	    <input type="file" name="nama_file[]" class="custom-file-input">
	    <label class="custom-file-label">Choose file...</label>
		</div>
		<div class="col-2">
			<button class="btn btn-primary" id="tambahRuanganBtn" onclick="event.preventDefault();tambahRuangan()">+</button>
		</div>
	</div>
	<button class="btn btn-primary">Entri Ruangan Selesai</button>
</div>