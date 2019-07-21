<div class="container">
	<div class="row align-items-center" style="min-height: 100vh">
		<div class="col-md-6 offset-3 border p-4">

			<?php if (validation_errors()): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors('<li>','</li>'); ?>
				</div>
			<?php endif ?>
			
			<?php if (null !== $this->session->flashdata('error')): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php endif ?>

			<form action="<?php echo base_url('autentikasi'); ?>" method="POST">
				<h3 class="font-weight-bold mb-4">Sistem Informasi Ketersediaan Kamar</h3>
				<div class="form-group row">
					<label for="username" value="<?php echo set_value('username'); ?>" class="col-md-3 col-form-label">Username</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
				<div class="form-group row">
					<label for="password" value="<?php echo set_value('password'); ?>" class="col-md-3 col-form-label">Password</label>
					<div class="col-md-9">
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<button type="submit" class="btn btn-primary">Masuk</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>