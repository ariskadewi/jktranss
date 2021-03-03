<h3 align="center" style="background-color: #C4C4C4;">HALAMAN REKAP NOTA</h3>

<!DOCTYPE html>
<html>
<head>
	<title>tampilnota</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="bg">
<form name="inputnota" method="post" action="prosesinputnota.php" id="masuk">
	<h3 align="center">Input Nota</h3>
	<table align="center">
		<tr>
			<td>sp</td>
			<td>:</td>
			<td><input type="text" name="sp"></td>
		</tr>
		<tr>
			<td>colli</td>
			<td>:</td>
			<td><input type="text" name="colli"></td>
		</tr>
		<tr>
			<td>berat</td>
			<td>:</td>
			<td><input type="text" name="berat"></td>
		</tr>
		<tr>
			<td>code</td>
			<td>:</td>
			<td><input type="text" name="code"></td>
		</tr>
		<tr>
			<td>franco</td>
			<td>:</td>
			<td><input type="text" name="franco"></td>
		</tr>
		<tr>
			<td>confrantcert</td>
			<td>:</td>
			<td><input type="text" name="confrancert"></td>
		</tr>
		<tr>
			<td>penerima barang</td>
			<td>:</td>
			<td><input type="text" name="penerimabarang"></td>
		</tr><tr>
			<td>keterangan</td>
			<td>:</td>
			<td><input type="text" name="keterangan"></td>
		</tr>
		<tr>
			<td>tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="simpan">
				<input type="reset" value="batal"></td>
		</tr>
	</table>
</form>

</body>
</html>


<h3 align="center">Data Nota</h3>
<div style="overflow-x:auto;">

<table id="table" border="1">
	<div id="bg-a">
	<tr>
		<th>no</th>
    	<th>sp</th>
        <th>colli</th>
        <th>berat</th>
        <th>code</th>
        <th>franco</th>
        <th>confrantcert</th>
        <th>penerima barang</th>
        <th>keterangan</th>
        <th>tanggal</th>
        <th>action</th>
    </tr>
    </div>
<?php  
include "koneksi.php";

$sql= "SELECT * FROM tbnota ";
$query= mysqli_query($koneksi,$sql);
$no=1;
while ($data = mysqli_fetch_array($query)) 
{
	
?>



 
<tr align="center">
    	<td><?php echo $no++; ?></td>
        <td><?php echo $data['sp']; ?></td>
        <td><?php echo $data['colli']; ?></td>
        <td><?php echo $data['berat']; ?></td>
        <td><?php echo $data['code'];?></td>
        <td><?php echo $data['franco'];?></td>
        <td><?php echo $data['confrancert'];?></td>
        <td><?php echo $data['penerimabarang'];?></td>
        <td><?php echo $data['keterangan'];?></td>
        <td><?php echo $data['tanggal'];?></td>
        <td><a href="editnota.php?kodenota=<?php echo $data['kodenota']; ?>">Edit |</a>
        	<a href="deletenota.php?<?php echo "kodenota=".$data['kodenota']; ?>">Delete |</a>
        </td>
</tr>


<?php
}
?>

</table>
</div>
</div>
</body>
</html>
