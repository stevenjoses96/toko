<?php 
	if(isset($_POST['daftar'])){
include('koneksi.php');
	echo $nama=$_POST['nama'];
	echo $email=$_POST['email'];
	echo $username=$_POST['username'];
	echo $password=$_POST['password'];
	echo $alamat=$_POST['alamat'];
	echo $nomor=$_POST['nomor'];

    $sql="INSERT INTO `user` (`nama`, `email`, `username`, `password`, `alamat`, `kontak`, `gambar`) VALUES 
    ('$nama', '$email', '$username', '$password', '$alamat', '$nomor', NULL);";
    $res=mysqli_query($db,$sql);
    echo"<script>alert('Akun berhasil ditambah !');history.go(-1);</script>";
 ?>

<?php
}
?>