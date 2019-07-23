<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIMRS - </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form action="<?php echo base_url('autentikasi/logout') ?>" method="POST" id="formLogout">
		    	<input type="hidden" name="logout">
		    </form>
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#" onclick="document.getElementById('formLogout').submit();">Logout</a>
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>
	<div class="container">
		<p>Selamat Datang, <?php echo $this->session->nm_user ?></p>
		<div class="row">
			<div class="col-md-4">
				<div class="list-group">
				  <a href="<?php echo base_url('ruangan'); ?>" class="list-group-item list-group-item-action">Master Ruangan</a>
				  <a href="<?php echo base_url('kamar'); ?>" class="list-group-item list-group-item-action">Master Kamar</a>
				  <a href="<?php echo base_url('ruangan/semua'); ?>" class="list-group-item list-group-item-action">List Ruangan & Kamar</a>
				  <a href="#" onclick="document.getElementById('formLogout').submit();" class="list-group-item list-group-item-action">Keluar</a>
				</div>
			</div>
			<div class="col-md-8">