<?php
require_once("db.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jk = $_POST["jk"];
$prodi = $_POST["prodi"];
$fak = $_POST["fak"];
$asal = $_POST["asal"];
$motto = $_POST["motto"];

$query = "INSERT INTO data values('$nama','$nim','$jk','$prodi','$fak','$asal','$motto')";

if(mysqli_query($conn,$query)){
	header("location: list.php");
}else{
	echo "gagal input data".mysqli_error($conn);
}
?>