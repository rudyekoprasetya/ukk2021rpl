<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<!-- css bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- css custom -->
	<style type="text/css">
		.card {
			width: 450px;
			box-shadow: 4px 5px lightblue;
			margin: auto;
		}
	</style>
</head>
<body>
<!-- menu atas -->
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 p-2" style="margin: auto">LAPOR.IN</span>
  </div>
</nav>
<!-- menu atas -->
	<h1 class="text-center">Login Masyarakat</h1>

	<!-- form login -->
	<div class="container">
		<div class="card">
		  <div class="card-body">
		    <form action="<?= site_url('login/cek'); ?>" method="POST">
			  <div class="mb-3">
			    <label for="username" class="form-label">Username</label>
			    <input type="text" class="form-control" id="username" name="username">
			  </div>
			  <div class="mb-3">
			    <label for="password" class="form-label">Password</label>
			    <input type="password" class="form-control" id="password" name="password">
			  </div>
			  <button type="submit" class="btn btn-danger btn-lg">Login</button>
			</form>
		  </div>
		</div>
	</div>
	
	<!-- form login -->


<!-- javascript bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>