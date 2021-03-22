<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<!-- css bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LAPOR.IN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('pengaduan/tambah'); ?>">Tambah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('login/logout');?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<!-- navbar -->

	<!-- isi -->
	<div class="container">
		<h2>Data Pengaduan <?= $this->session->userdata('username'); ?></h2>
		<p><button class="btn btn-success" onclick="window.print()">Cetak</button></p>

		<!-- tabel pengaduan -->
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Tanggal Pengaduan</th>
		      <th scope="col">NIK</th>
		      <th scope="col">Isi Laporan</th>
		      <th scope="col">Foto</th>
		      <th scope="col">Status</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
<?php foreach ($konten->result_array() as $row) { ?>
		    <tr>
		      <th scope="row"><?= $row['id_pengaduan'];?></th>
		      <td><?= $row['tgl_pengaduan'];?></td>
		      <td><?= $row['nik'];?></td>
		      <td><?= $row['isi_laporan'];?></td>
		      <td><?= $row['foto'];?></td>
		      <td><?= $row['status'];?></td>
		      <td>
		      	<a href="<?= site_url('pengaduan/edit/'.$row['id_pengaduan']); ?>" class="btn btn-warning btn-small">Edit</a> | 
		      	<a href="<?= site_url('pengaduan/hapus/'.$row['id_pengaduan']) ?>" class="btn btn-danger btn-small" onclick="return confirm('Yakin ?')">Delete</a>
		      </td>
		    </tr>
<?php } ?>		    
		  </tbody>
		</table>
		<!-- tabel pengaduan -->

	</div>
	<!-- isi -->

<!-- javascript bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>