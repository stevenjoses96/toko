<?php 

include('koneksi.php');
echo $nama=$_POST['nama'];
echo $email=$_POST['email'];
echo $username=$_POST['username'];
echo $password=$_POST['password'];
echo $alamat=$_POST['alamat'];
echo $kontak=$_POST['kontak'];

echo $fileName = $_FILES['gambar']['name'];

$query="UPDATE `user` SET `nama` = '$nama', `email` = '$email', `password` = '$password', `alamat` = '$alamat', `kontak` = '$kontak', `gambar` = '$fileName' WHERE `user`.`username` = '$username'";

mysqli_query($db,$query);

move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/img/user/".$username."_".$_FILES['gambar']['name']);
echo"<script>alert('Berhasil diupdate !');history.go(-1);</script>";                        
?>

                       