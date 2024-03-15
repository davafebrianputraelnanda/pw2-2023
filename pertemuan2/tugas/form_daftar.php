<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<h3>Form Pendaftaran</h3>
		<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
			<div class="form-group">
				<label for="Nama">Nama Lengkap</label>
				<input type="text" class="form-control" id="Nama">
			</div>
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="email" class="form-control" id="Email">
			</div>
			<div class="form-group">
				<label for="Alamat">Alamat</label>
				<textarea class="form-control" id="Alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="Telepon">Telepon</label>
				<input type="tel" class="form-control" id="Telepon">
			</div>
			<button class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>