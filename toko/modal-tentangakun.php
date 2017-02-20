    <div class="modal fade" id="tentangakun" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2><b>Tentang Akun Anda</b></h2>
                    </div>
                    

                    <form METHOD="POST" ACTION="aksi-editakun.php" enctype="multipart/form-data">
                    <?php 
                    include('koneksi.php');

                    $sql1="select * from user where username='$username'";
                    $res1=mysqli_query($db,$sql1);
                    $dt=mysqli_fetch_assoc($res1)
                     ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <?php echo "<img class='featurette-image img-responsive center-block img-rounded'  
                            src='assets/img/user/".$username."_".$dt['gambar']."' width='200px' height='200px'/>"; ?>               
                        </div>

                        <div class="form-group" style="margin-left:190px;">
                             <input type="file" name="gambar">                    
                        </div>


                        <div class="form-group" style="margin-top=:30px;">
                            <div class="col-sm-6">
                                Nama Anda : <input type="text" class = "form-control" name="nama" value="<?php echo $dt['nama']; ?>">  
                            </div>
                            <div class="col-sm-6">
                                Email Anda : <input type="email" class = "form-control" name="email" value="<?php echo $dt['email']; ?>"> 
                            </div>
                                                  
                        </div>
                        
                        <div class="form-group">
                        <div class="col-sm-6">
                            Username : <input type="text" class = "form-control" name="username" value="<?php echo $dt['username']; ?>" readonly> 
                        </div>
                        <div class="col-sm-6">
                            Password : <input type="text" class = "form-control" name="password" value="<?php echo $dt['password']; ?>">  
                        </div>
                                                   
                        </div>
                        
                        <div class="form-group" >
                        <div class="col-sm-6">
                            Alamat : <input type="text" class = "form-control" name="alamat" value="<?php echo $dt['alamat']; ?>"> 
                        </div>
                        <div class="col-sm-6">
                            Kontak : <input type="text" class = "form-control" name="kontak" value="<?php echo $dt['kontak']; ?>">
                        </div>                       
                        </div>
                                    
                        <div class="form-group" >
                            <div class="col-sm-12" style="margin-top:10px;">
                                <button class="btn btn-success" name="pengaturanakun">Simpan</button>
                            </div>
                                                 
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
