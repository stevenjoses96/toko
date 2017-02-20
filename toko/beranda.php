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
	
include('koneksi.php');
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from user";
        $res=mysqli_query($db,$sql);
        $num_rows = mysqli_num_rows($res);
        $i=0;

        while ($data=mysqli_fetch_assoc($res)) {
          $i++;
          if ($data['username']==$username && $data['password']==$password) {
            $nama=$data['nama'];
            break;
          }
          if ($num_rows==$i) {
            ?>
            <script type="text/javascript">
            alert('GAGAL LOGIN! coba lagi');
            document.location.href="index.php";
            </script>
            <?php
          //header('location:index-toko.php');
          }
        
    } ?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="assets/img/user/noimage.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $nama; ?>
					</div>
					<div class="profile-usertitle-job">
						Developer
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
							<a href="#masuktoko" data-toggle="modal"">
							<i class="glyphicon glyphicon-home"></i>
							Masuk Toko </a>
						</li>
						<li>
							<a href="#daftartoko" data-toggle="modal">
							<i class="glyphicon glyphicon-plus"></i>
							Buka Toko Baru </a>
						</li>
						<li>
							<a href="#tentangakun" data-toggle="modal">
							<i class="glyphicon glyphicon-user"></i>
							Tentang </a>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		
		<div class="col-md-9">
			<form method="POST" action="berandacaribarang.php">
			<div class="input-group">
					
                    <input type="text" class="form-control" placeholder="Cari Barang. . ." name="namabrg">
                    <input type="text" name="username" value="<?php echo $username;?>" hidden>
                    <input type="text" name="password" value="<?php echo $password;?>" hidden>
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                    
            </div>
            </form>
            <div class="profile-content">
			   <?php include('peta.php'); ?>
            </div>
		</div>
	</div>
</div>
<?php include('modal-tentangakun.php'); ?>
<?php include('modal-buka-toko.php'); ?>
<?php include('modal-masuk-toko.php'); ?>

</body>
</html>
