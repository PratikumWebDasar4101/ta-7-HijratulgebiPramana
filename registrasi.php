<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<center><h2>Form Registrasi</h2></center>
	<form action="submit.php" method="POST">
		<table align="center">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
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
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td>:</td> <td>
				<textarea name="motto" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>