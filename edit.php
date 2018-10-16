<?php
require_once("db.php");

$nim = $_GET["nim"];
$sql = mysqli_query($conn, "SELECT * FROM data WHERE nim='$nim'");
$row = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<center><h2>Form Update</h2></center>
	<form action="submit.php" method="POST">
		<table align="center">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="<?php echo $row['nama'] ?>"> <br></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim" placeholder="<?php echo $row['nim'] ?>"> <br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="pria">pria <br>
					<input type="radio" name="jk" value="wanita">wanita</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
				<select name="prodi">
					<option value="D3 sistem informasi">D3 Sistem Infprmasi</option> <br>
					<option value="D3 sistem multimedia">D3 Sistem multimedia</option>
					<option value="D3 sistem komputer">D3 Sistem komputer</option>
					<option value="D3 sistem jaringan">D3 Sistem jaringan</option>
					<option value="D3 sistem komunikasi">D3 Sistem komunikasi</option> </td>
				</select>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td><td>
				<select name="fak">
					<option value="fakultas ilmu terapan">fakultas ilmu terapan</option>
					<option value="fakultas informatika">fakultas informatika</option>
					<option value="fakultas ekonomi bisnis">fakultas ekonomi bisnis</option>
					<option value="fakultas elektro">fakultas elektro</option> </td>

				</select>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo $row["asal"];?>"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td>:</td> <td>
				<textarea name="motto" cols="30" rows="10" value="<?php echo $row["moto"];?>"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php
    if (isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk		= $_POST["jk"];
		$program_studi		= $_POST["program_studi"];
		$fakultas	= $_POST["fakultas"];
		$asal		= $_POST["asal"];
		$motto 		= $_POST["motto "];
        $sql = "UPDATE webdasar SET nama='$nama',nim='$nim',jk = '$jk', program_studi = '$program_studi', fakultas = '$fakultas', asal = '$asal', motto  = '$motto ' WHERE nim='$nim'";
        if (mysqli_query($conn, $sql)) {
            header("location: list.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>