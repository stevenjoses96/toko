<?php 
	if(isset($_POST['daftartoko'])){
include('koneksi.php');
	$kode_toko=$_POST['kode_toko'];
	$nama_toko=$_POST['nama_toko'];
	$deskripsi=$_POST['deskripsi'];
	$username=$_POST['username'];
	// $sql2="SELECT * FROM user WHERE username='$username'";
	// $res2=mysqli_query($db,$sql2);
	// $dt2=mysqli_fetch_array($res2);

	// $nama=$dt2['nama'];
	// $email=$dt2['email'];
	// $username=$dt2['username'];
	// $password=$dt2['password'];
	// $alamat=$dt2['alamat'];
	// $kontak=$dt2['kontak'];
	// $gambar=$dt2['gambar'];
	$sql="INSERT INTO `toko` (`username`, `kode_toko`, `nama_toko`, `lintang`, `bujur`, `deskripsi`, `gambar`) VALUES ('$username', '$kode_toko', '$nama_toko', '', '', '$deskripsi', '');";

     $res=mysqli_query($db,$sql);
    echo"<script>alert('Berhasil ditambahkan !');history.go(-1);</script>";
 ?>

<?php
}
?>