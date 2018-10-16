<?php
$conn = mysqli_connect("localhost","root","","jurnal");

if(!$conn){
	die("gagal terhubung".mysqli_error($conn));
}
?>