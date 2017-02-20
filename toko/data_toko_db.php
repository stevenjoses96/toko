var toko = [
<?php
	include('koneksi.php');
	
	$sql="select kode_toko, nama_toko, lintang, bujur from toko";

	$koordinat="";
	$res=mysqli_query($db,$sql);
	while($data=mysqli_fetch_array($res)){
		$koordinat.="{
					  'lintang': ".$data['lintang'].",
					  'bujur':".$data['bujur'].",
					  'nama':'".$data['nama_toko']."'
				     },";
	}
	$koordinat=substr($koordinat,0,strlen($koordinat)-1);// Hilangkan , terakhir
	echo $koordinat;
?>
];
