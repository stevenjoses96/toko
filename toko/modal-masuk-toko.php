	<div class="modal fade" id="masuktoko" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                    	<h2><b>Pilih Toko Anda</b></h2>
                    </div>
                    <?php 
                    include('koneksi.php');
                    $sql1="SELECT * FROM toko where username='$username'";
                    $user=$username;
                    $query1=mysqli_query($db,$sql1);
                    $i=1;
                    while ($data=mysqli_fetch_assoc($query1)) {
                        $username='username'.$i;
                        $kode_toko='kode_toko'.$i;
                        
                     ?>
                    <form class="form-horizontal" METHOD="POST" ACTION="berandatoko.php">
                    <div class="modal-body">                        	
                     
                        <div class="form-group">
                            <div class="col-sm-4" style="margin-top:8px;">
                                <input type = "text"  name="<?php echo $username;?>" value="<?php echo $data['username'];?>" hidden>
                                <input type = "text"  name="user" value="<?php echo $data['username'];?>" hidden>
                                <label><b>Kode Toko</b></label>
                            </div>
                            <div class="col-sm-4">
                                <input type = "text" class = "form-control" name="<?php echo $kode_toko;?>" value="<?php echo $data['kode_toko'];?>" readonly>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-success" name="kode_toko" value="<?php echo $data['kode_toko'];?>">Masuk</button>
                            </div>
                        </div>

                    </div>
                    <?php $i++; } ?>
                    <div class="modal-footer">
                        <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
