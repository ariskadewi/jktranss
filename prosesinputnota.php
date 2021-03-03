<?php 
include "koneksi.php";

$sp =$_POST['sp'];
$colli =$_POST['colli'];
$berat =$_POST['berat'];
$code =$_POST['code'];
$franco =$_POST['franco'];
$confrancert =$_POST['confrancert'];
$penerimabarang =$_POST['penerimabarang'];
$keterangan =$_POST['keterangan'];
$tanggal =$_POST['tanggal'];


$sql="INSERT INTO tbnota VALUES ('','$sp','$colli','$berat','$code','$franco','$confrancert','$penerimabarang','$keterangan','$tanggal')";
$query= mysqli_query($koneksi,$sql);


if ($query) {
	echo "<script>
		alert ('input berhasil');
		location.href ='index.php';
	</script>";
}
else 
{
	echo "<script>
		alert ('input gagal');
		location.href ='prosesinputnota.php';
	</script>";
}
?>