<?php  
include "koneksi.php";

$kodenota =$_POST['kodenota'];
$sp =$_POST['sp'];
$colli =$_POST['colli'];
$berat =$_POST['berat'];
$code =$_POST['code'];
$franco =$_POST['franco'];
$confrancert =$_POST['confrancert'];
$penerimabarang =$_POST['penerimabarang'];
$keterangan =$_POST['keterangan'];
$tanggal =$_POST['tanggal'];

$sql="UPDATE tbnota set sp='$sp',colli='$colli',berat='$berat',code='$code',franco='$franco',confrancert='$confrancert',penerimabarang='$penerimabarang',keterangan='$keterangan',tanggal='$tanggal' where kodenota='$kodenota'";
$query=mysqli_query($koneksi,$sql);

if ($query) {
	echo "<script>
		alert ('edit berhasil');
		location.href ='index.php';
	</script>";
}
else 
{
	// echo "<script>
	// 	alert ('edit gagal');
	// 	location.href ='index.php';
	// </script>";
	echo "ggal";
}
?>