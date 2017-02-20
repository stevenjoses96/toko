<?php 

$kode=$_POST['kode_toko'];
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Beranda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="beranda.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$username=$_POST['user'];
include('koneksi.php');
$sql1="SELECT * FROM toko where username='$username'";

$res1=mysqli_query($db,$sql1);
$i=1;
while($dt=mysqli_fetch_assoc($res1)) { 
	if ($kode==$dt['kode_toko']) {
		$username='username'.$i;
		$kode_toko='kode_toko'.$i;
		break;
	}
	$i++;
}  
   $username=$_POST[$username];
	$kode_toko=$_POST[$kode_toko];   

$sql2="select * from toko where kode_toko='$kode_toko' ";
$res2=mysqli_query($db,$sql2);

while($dt=mysqli_fetch_assoc($res2)) {
?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="assets/img/toko/noimage.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $dt['nama_toko']; ?>
					</div>
					<div class="profile-usertitle-job">
						Toko Anda
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Pesan</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">

						<li class="active">
							<a href="#cekbarang" data-toggle="modal">
							<i class="glyphicon glyphicon-search"></i>
							Cek Barang </a>
						</li>
						<li >
							<a href="#inputbarang" data-toggle="modal"">
							<i class="glyphicon glyphicon-plus"></i>
							input Barang </a>
						</li>
						<li>
							<a href="#hapusbarang" data-toggle="modal">
							<i class="glyphicon glyphicon-minus"></i>
							Hapus Barang </a>
						</li>
						<li>
							<a href="#tentang" data-toggle="modal">
							<i class="glyphicon glyphicon-user"></i>
							Tentang </a>
						</li>
						
						<li style="margin-top:10px; padding-left:20px;">
							<form method="POST" action="lokasi.php">
								<input type="text" name="kode_toko" value="<?php echo $kode_toko ?>" hidden>
								<button class="btn btn-warning btn-sm" ><b>Lokasi Toko</b></button>
							</form>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <?php include('petaberanda.php'); ?>
            </div>
		</div>
	</div>
</div>
<?php } ?>
    <?php include('modal-inputbarang.php'); ?>
    <?php include('modal-cekbarang.php'); ?>
    <?php include('modal-hapusbarang.php'); ?>
    <?php include('modal-tentangtoko.php'); ?>
</body>
</html>
