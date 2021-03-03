<?php  
include "koneksi.php";

$kodenota= $_GET['kodenota'];

$input="DELETE FROM tbnota where kodenota='$kodenota'";
$query=mysqli_query($koneksi,$input);


if ($query) {
	echo "<script>alert('Data Berhasil Di Hapus');
	location.href='index.php';</script>";
}
else
{
	echo "<script>alert('Data Gagal Di Hapus');
	location.href='index.php';</script>";
}
?>