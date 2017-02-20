<?php 

include('koneksi.php');
$kode_toko=$_POST['kode_toko'];

$nama_toko=$_POST['nama_toko'];

$deskripsi=$_POST['deskripsi'];

$fileName = $_FILES['gambar']['name'];

echo $query="UPDATE `toko` SET `nama_toko` = '$nama_toko', `deskripsi` = '$deskripsi', `gambar` = '$fileName' WHERE `toko`.`kode_toko` = '$kode_toko'";

mysqli_query($db,$query);

move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/img/toko/".$kode_toko."_".$_FILES['gambar']['name']);
echo"<script>alert('Berhasil diupdate !');history.go(-1);</script>";                        
?>
?>
                       