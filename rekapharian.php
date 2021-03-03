<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3 align="center" style="background-color:  #C4C4C4;">HALAMAN REKAP HARIAN</h3>
        
<form method="post" action="" id="masuk">
    <h3 align="center">INPUT TANGGAL</h3>
            <table>
                <tr>
                    <td width="180px">masukan tanggal</td>

                        <td>
                            <select name="tanggal">
                                <option value="">tanggal yang tersedia</option>
                                    <?php
                                     include "koneksi.php";
                                        $sql = "SELECT * FROM tbnota";
                                        $query = mysqli_query($koneksi,$sql);
                                        while($data = mysqli_fetch_array($query))
                                        { echo $data['tanggal'];
                                    ?>
                                <option value="<?php echo $data['tanggal']; ?>">
                                    <?php echo $data['tanggal']; ?>
                                    </option>
                                    <?php 
                                        }
                                    ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="oke" name="tgl"></td>
                    </tr>
            </table>
        </form>
<h3 align="center">Data Nota</h3>
<div style="overflow-x:auto;">

<table id="table" border="1" style="background-color: #C4C4C4;" align="center">
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

if (isset($_POST['tgl'])) {
    $tanggal = $_POST['tanggal'];

$sql= "SELECT * FROM tbnota where tanggal='$tanggal' ";
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
}}
?>
</table>
<a href="index.php">kembali</a>
</body>
</html> 