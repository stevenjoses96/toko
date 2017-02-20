<?php
	include('koneksi.php');
	$id= $_GET['id'];

	$query = "DELETE FROM barang WHERE id=".$id;

	mysqli_query($db,$query);

	echo"<script>alert('Terhapus !');history.go(-1);</script>";

?>