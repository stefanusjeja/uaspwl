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
	<a href="index.php">< Lihat Semua Data</a>
	
	<h3>Edit Kendaraan</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "+koneksi.php";
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM kendaraan WHERE id = '$id'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		?>		
		<table>
			<tr>
				<td>Jenis Kendaraan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="jenis" value="<?php echo $data['jenis'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Merk/Type</td>
				<td><input type="text" name="merk" value="<?php echo $data['merk'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Warna Kendaraan</td>
				<td><input type="text" name="warna" value="<?php echo $data['warna'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Tahun Pembuatan</td>
				<td><input type="number" name="tahun" value="<?php echo $data['tahun'] ?>" required></td>					
			</tr>
			<tr>
				<td>Bahan Bakar</td>
				<td><input type="text" name="bbm" value="<?php echo $data['bbm'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Nomor Polisi</td>
				<td><input type="text" name="nopol" value="<?php echo $data['nopol'] ?>" required></td>					
			</tr>
			<tr>
				<td>Nomor Rangka</td>
				<td><input type="text" name="norangka" value="<?php echo $data['norangka'] ?>" required></td>					
			</tr>
			<tr>
				<td>Nomor Mesin</td>
				<td><input type="text" name="nomesin" value="<?php echo $data['nomesin'] ?>" required></td>					
			</tr>
			<tr>
				<td>Pemilik</td>
				<td><input type="text" name="pemilik" value="<?php echo $data['pemilik'] ?>" required></td>					
			</tr>
			<tr>
				<td>Alamat Pemilik</td>
				<td><textarea name="alamat" required><?php echo $data['alamat'] ?></textarea></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>