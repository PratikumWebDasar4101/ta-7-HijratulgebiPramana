<?php
require_once("db.php");
?>

<center><a href="list.php" style="text-decoration: none;"> Lihat Data Awal </a></center>

<br> <br>
<center><h2>Detail Data Mahasiswa</h2></center>
<table border="1" align="center" width="80%" cellpadding="13" style="border-collapse: collapse;">
	<thead>
		<th> Nama </th>
		<th> NIM </th>
		<th> Jenis Kelamin </th>
		<th> Program Studi </th>
		<th> Fakultas </th>
		<th> Asal </th>
		<th> Motto Hidup </th>
		<th> Aksi </th>
	</thead>

	<body>
		<?php
		$sql = "SELECT * FROM data";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				 <tr>
				 	<td><?php echo $row["nama"] ?></td>
				 	<td><?php echo $row["nim"] ?></td>
				 	<td><?php echo $row["jk"] ?></td>
				 	<td><?php echo $row["program_studi"] ?></td>
				 	<td><?php echo $row["fakultas"] ?></td>
				 	<td><?php echo $row["asal"] ?></td>
				 	<td><?php echo $row["motto"] ?></td>
				 	<td> <a href='edit.php?nim=<?php echo $row['nim']?>' style="text-decoration: none;"> Edit </a>
				</tr>
				<?php
			}
		}else{
			echo "Data tidak tersedia";
		}
		mysqli_close($conn);
		?>
	</body>
</table>