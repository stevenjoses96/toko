<?php 
include('koneksi.php');
 $kode_toko=$_POST['kode_toko'];

 $id=$_POST['idr'];

 $sql1="select * from barang WHERE kode_toko='$kode_toko'";
 $res1=mysqli_query($db,$sql1);
 $i=1;
 while($dt=mysqli_fetch_assoc($res1)) { 
 	if ($id==$dt['id']) {
 		$nama_barang='nama_barang'.$i;
 		$harga_barang='harga_barang'.$i;
 		$stok_barang='stok_barang'.$i;
 		$satuan='satuan'.$i;
 		$gambar='gambar'.$i;
 		break;
 	}
 	$i++;
 }
  $kode_toko=$_POST['kode_toko'];
  $nama_barang=$_POST[$nama_barang];
  $harga_barang=$_POST[$harga_barang];
  $stok_barang=$_POST[$stok_barang];
  $satuan=$_POST[$satuan];
  $fileName = $_FILES[$gambar]['name'];
  $query="UPDATE `barang` SET `nama_barang` = '$nama_barang', `harga_barang` = '$harga_barang', `stok_barang` = '$stok_barang', `satuan` = '$satuan', `gambar` = '$fileName' WHERE `barang`.`id` = $id";

  mysqli_query($db,$query);
  move_uploaded_file($_FILES[$gambar]['tmp_name'], "assets/img/barang/".$kode_toko.'_'.$_FILES[$gambar]['name']);
   echo"<script>alert('Gambar Berhasil diupdate !');history.go(-1);</script>";                        
?>
           
            