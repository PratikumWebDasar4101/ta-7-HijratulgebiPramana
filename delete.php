<?php
require_once("db.php");

$nim = $_GET["nim"];
$query = "DELETE FROM data WHERE nim='$nim'";

if (mysqli_query($conn,$query)) {
	header("location: list.php");
}else{
	echo "Gagal Menghapus Data".$nim;
}
?>