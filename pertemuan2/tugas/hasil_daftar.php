<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Dava Febrian Putra Elnanda</td>
					<td>davaf145@gmail.com</td>
					<td>Bogor</td>
					<td>+6281281814495</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Dav</td>
					<td>Dav@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
				  if (isset($_POST['submit'])) {
                    $submit = $_POST['submit'];
                    $Nama = $_POST['Nama'];
                    $Email = $_POST['Email'];
                    $Alamat = $_POST['Alamat'];
                    $Telepon = $_POST['Telepon'];
                    
                    
                    echo $submit;
                    echo '<td/> ' . $Nama;
                    echo '<td/>' . $Email;
                    echo '<td/>' . $Alamat;
                    echo '<td/>' . $Telepon;
                  }
				?>
			</tbody>
		</table>
	</div>
</body>
</html>