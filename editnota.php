<h3 align="center" style="background-color: #C4C4C4;">HALAMAN EDIT NOTA</h3>


<?php  
include "koneksi.php";

$kodenota=$_GET['kodenota'];

$sql="SELECT * FROM tbnota WHERE kodenota='$kodenota'";
$query= mysqli_query($koneksi,$sql);
$input=mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>halamaneditnota</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form name="editnota" method="post" action="proseseditnota.php" id="masuk">
	<h3 align="center">Edit Nota</h3>
	<table align="center" id="">
		<tr>
			<td></td>
			<td></td>
			<td><input type="hidden" name="kodenota" value="<?php echo  $input['kodenota']; ?>"></td>
		</tr>
		<tr>
			<td>sp</td>
			<td>:</td>
			<td><input type="text" name="sp"  value="<?php echo  $input['sp']; ?>"></td>
		</tr>
		<tr>
			<td>colli</td>
			<td>:</td>
			<td><input type="text" name="colli" value="<?php echo  $input['colli']; ?>"></td>
		</tr>
		<tr>
			<td>berat</td>
			<td>:</td>
			<td><input type="text" name="berat" value="<?php echo  $input['berat']; ?>"></td>
		</tr>
		<tr>
			<td>code</td>
			<td>:</td>
			<td><input type="text" name="code" value="<?php echo  $input['code']; ?>"></td>
		</tr>
		<tr>
			<td>franco</td>
			<td>:</td>
			<td><input type="text" name="franco" value="<?php echo  $input['franco']; ?>"></td>
		</tr>
		<tr>
			<td>confrantcert</td>
			<td>:</td>
			<td><input type="text" name="confrancert" value="<?php echo  $input['confrancert']; ?>"></td>
		</tr>
		<tr>
			<td>penerima barang</td>
			<td>:</td>
			<td><input type="text" name="penerimabarang" value="<?php echo  $input['penerimabarang']; ?>"></td>
		</tr>
		<tr>
			<td>keterangan</td>
			<td>:</td>
			<td><input type="text" name="keterangan" value="<?php echo  $input['keterangan']; ?>"></td>
		</tr>
		<tr>
			<td>tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal" value="<?php echo  $input['tanggal']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="simpan">
				<input type="reset" value="batal">
				<a href="index.php">kembali</a></td>
		</tr>
	</table>
</form>

</body>
</html>