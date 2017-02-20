    <div class="modal fade" id="cekbarang" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2><b>Periksa Barang Anda</b></h2>
                    </div>
                    <?php 
                    include('koneksi.php');

                    $sql1="select * from barang where kode_toko='$kode_toko'";
                    $res1=mysqli_query($db,$sql1);
                    
                    $result1 = mysqli_query($db,"select * from barang");
                   
                    $i=1;
                     ?>
                    <form METHOD="POST" ACTION="aksi_edit.php" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group" style="height:20px;">
                            <div class="col-sm-3" >
                                <b>Nama</b>
                            </div>
                            <div class="col-sm-3" >
                                <b>Harga</b>
                            </div>
                            <div class="col-sm-3" >
                                <b>Stok</b>
                            </div>
                            <div class="col-sm-3" >
                                <b>Satuan</b>
                            </div>
                            
                        </div>

                        <?php while($dt=mysqli_fetch_assoc($res1)) { 
                            $nama_barang='nama_barang'.$i;
                            $harga_barang='harga_barang'.$i;
                            $stok_barang='stok_barang'.$i;
                            $satuan='satuan'.$i;
                            $gambar='gambar'.$i;

                        ?> 
   
                        <div class="form-group" style="height:30px;">
                            
                            <div class="col-sm-3" style="margin-top:7px;">
                                <input type="text" class = "form-control" name="<?php echo $nama_barang; ?>" value="<?php echo $dt['nama_barang']; ?>">
                                <input type="text" name="kode_toko" value="<?php echo $kode_toko; ?>" hidden> 
                            </div>
                            <div class="col-sm-3" style="margin-top:7px;">
                                <input type="text" class = "form-control" name="<?php echo $harga_barang; ?>" value="<?php echo $dt['harga_barang']; ?>">
                            
                            </div>
                            <div class="col-sm-3" style="margin-top:7px;">
                                <input type="text" class = "form-control" name="<?php echo $stok_barang; ?>" value="<?php echo $dt['stok_barang']; ?>">
                              
                            </div>
                            <div class="col-sm-3" style="margin-top:7px;">
                                <select name="<?php echo $satuan; ?>" >
                                  <option value="<?php echo $dt['satuan']; ?>"><?php echo $dt['satuan']; ?></option>
                                  <option value="Kilogram">Kilogram</option>
                                  <option value="Bungkus">Bungkus</option>
                                  <option value="Liter">Liter</option>
                                  <option value="Potong">Potong</option>
                                  <option value="Butir">Butir</option>
                                  <option value="Ikat">Ikat</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="height:30px;">
                            
                            <div class="col-sm-12" style="margin-top:7px;">
                                <input type="file" name="<?php echo $gambar;?>" value="<?php echo $dt['gambar']; ?>">
                                <b></b>
                            </div>
                        </div>
                        <div class="form-group" style="height:30px;">
                            <div class="col-sm-12" style="margin-top:7px;">
                                <button class="btn btn-success" name="idr" value="<?php echo $dt['id'];?>">Simpan</button>
                            </div>
                        </div>

                        <?php $i++; } $i=1; ?>
                    </div>
                    </form>

                    <div class="modal-footer">
                        <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                        
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    </div>
                    
                </div>
            </div>
    </div>
