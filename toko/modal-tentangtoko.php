    <div class="modal fade" id="tentang" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2><b>Tentang Toko Anda</b></h2>
                    </div>
                    

                    <form METHOD="POST" ACTION="aksi_edittoko.php" enctype="multipart/form-data">
                    <?php 
                    include('koneksi.php');

                    $sql1="select * from toko where kode_toko='$kode_toko'";
                    $res1=mysqli_query($db,$sql1);
                    $dt=mysqli_fetch_assoc($res1)
                     ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <?php echo "<img class='featurette-image img-responsive center-block img-rounded'  
                            src='assets/img/toko/".$kode_toko."_".$dt['gambar']."' width='200px' height='200px'/>"; ?>               
                        </div>

                        <div class="form-group" style="margin-left:190px;">
                             <input type="file" name="gambar">                    
                        </div>


                        <div class="form-group" style="margin-top=:30px;">
                            Nama Toko : <input type="text" class = "form-control" name="nama_toko" value="<?php echo $dt['nama_toko']; ?>">                        
                        </div>
                        <div class="form-group">
                            Kode Toko : <input type="text" class = "form-control" name="kode_toko" value="<?php echo $dt['kode_toko']; ?>" readonly>                        
                        </div>
                                    
                        <div class="form-group">
                            Deskripsi Toko : <input type="text" class = "form-control" name="deskripsi" value="<?php echo $dt['deskripsi']; ?>">                        
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" name="pengaturan">Simpan</button>                     
                        </div>
                   
                    </div>

                    </form>

                    <div class="modal-footer">
                        <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                        
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    </div>
                    
                </div>
            </div>
    </div>
