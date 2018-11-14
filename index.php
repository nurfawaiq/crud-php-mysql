<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Sepeda Motor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Pendataan Kehilangan Kendaraan Bermotor Roda 2</h2>
		<h3>Polrestabes Semarang</h3>
	</div>

	<br />
	<a href="form_tambah.php">+ Tambah Data Baru</a>

	<h3>Data Kendaraan</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>No.</th>
				<th>Jenis Kendaraan</th>
				<th>Merk/Type</th>
				<th>Warna Kendaran</th>
				<th>Tahun Kendaraan</th>
				<th>Bahan Bakar</th>
				<th>Nomor Polisi</th>
				<th>Nomor Rangka</th>
				<th>Nomor Mesin</th>
				<th>Pemilik</th>
				<th>Alamat Pemilik</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "+koneksi.php";
			$query = mysql_query("SELECT * FROM kendaraan") or die(mysql_error());
			$nomor = 1;
			while($data = mysql_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['jenis']; ?></td>
					<td><?php echo $data['merk']; ?></td>
					<td><?php echo $data['warna']; ?></td>
					<td><?php echo $data['tahun']; ?></td>
					<td><?php echo $data['bbm']; ?></td>
					<td><?php echo $data['nopol']; ?></td>
					<td><?php echo $data['norangka']; ?></td>
					<td><?php echo $data['nomesin']; ?></td>
					<td><?php echo $data['pemilik']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>