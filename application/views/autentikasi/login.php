<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIMRS - </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>