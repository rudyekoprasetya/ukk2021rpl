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
          <a class="nav-link" href="<?= site_url('pengaduan'); ?>">Home</a>
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

  <div class="container">
    <h2>Tambah Data Pengaduan</h2>

    <!-- form tambah data -->
<form action="<?= site_url('pengaduan/simpan'); ?>" method="POST">
  <div class="mb-3">
    <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
    <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan">
  </div>
  <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <select class="form-select" id="nik" name="nik">
<?php foreach ($nik->result_array() as $row) { ?>
      <option value="<?= $row['nik']; ?>"><?= $row['nik']; ?> - <?= $row['nama']; ?></option>
<?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="isi_laporan" class="form-label">Isi Laporan</label>
    <textarea rows="4" class="form-control" id="isi_laporan" name="isi_laporan"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" name="foto" id="foto" class="form-control">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-select" id="status" name="status">
      <option value="belum">Belum</option>
      <option value="proses">Proses</option>
      <option value="selesai">Selesai</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <button type="reset" class="btn btn-danger">Batal</button>
</form>
    <!-- form tambah data -->
  </div>

<!-- javascript bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>