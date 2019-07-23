<h2>List Ruangan & Kamar</h2>
<?php if (count($semua_ruangan) === 0): ?>
	<h5 class="text-center my-5 text-secondary">Belum Ada Ruangan.</h5>
<?php endif ?>
<div class="row mt-4 mb-5 pb-5">
	<?php foreach ($semua_ruangan as $key => $s): ?>
		<div class="col-md-6">
			<div class="w-100 bg-light border" style="height: 150px;"></div>
			<p class="h4 py-2"><?php echo $s['nama_ruangan']; ?></p>
			<ul class="nav flex-column">
				<?php foreach ($this->db->get_where('tb_kamar', ['id_ruangan' => $s['id_ruangan']])->result_array() as $key => $k): ?>
					<li class="nav-item"><?php echo $k['nm_kat_kamar'] ?></li>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endforeach ?>
</div>