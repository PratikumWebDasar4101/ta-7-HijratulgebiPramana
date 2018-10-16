<?php
require_once("db.php");

$query = "SELECT * FROM data";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center><h2>DATA MAHASISWA</h2></center>
	<table border="1" align="center" width="50%" cellpadding="7" style="border-collapse: collapse;">
				<tr>
			<td colspan="2">
				<form action="cari.php" method="get">
					<input type="text" name="cari" placeholder="cari mahasiswa">
					<input type="submit" value="cari">
				</form>
			</td>
			<td>
				<a href="registrasi.php">Registrasi</a>
			</td>
		</tr>
		<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Aksi</th>
			</tr>
		<?php if(mysqli_num_rows($result) > 0) : ?>
			<?php while($rows = mysqli_fetch_array($result)) { ?>
				<tr>
					<td><?php echo $rows["nama"]  ?></td>
					<td><?php echo $rows["nim"]  ?></td>
					<td><a href="delete.php?nim=<?php echo $rows['nim'] ?>">Hapus</a> | <a href="detail.php?id=<?php echo $row['id']?>">Detail</a></td>
				</tr>
			
		<?php } endif ?>
	</table>

</body>
</html>