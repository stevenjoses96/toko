    <div class="modal fade" id="hapusbarang" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2><b>Silahkan Hapus Barang Anda/b></h2>
                    </div>
                    <?php 
                    include('koneksi.php');

                    $sql1="select * from barang where kode_toko='$kode_toko'";
                    $res1=mysqli_query($db,$sql1);
                    
                    
                     ?>

                    <div class="modal-body">
                        <div class="form-group" style="height:20px;">
                            <div class="col-sm-3" >
                                <b>Nama Barang</b>
                            </div>
                            <div class="col-sm-3" >
                                <b>Harga Barang</b>
                            </div>
                            <div class="col-sm-2" >
                                <b>Stok</b>
                            </div>
                            <div class="col-sm-2" >
                                <b>Satuan</b>
                            </div>
                            <div class="col-sm-2">
                                <b>Aksi</b>
                            </div>
                            
                        </div>

                        
                        <?php while($dt=mysqli_fetch_assoc($res1)) { ?> 
                        <div class="form-group" style="height:20px;">
                            
                            <div class="col-sm-3" style="margin-top:7px;">
                                <b><?php echo $dt['nama_barang']; ?></b>
                            </div>
                            <div class="col-sm-3" style="margin-top:7px;">
                                <b><?php echo $dt['harga_barang']; ?></b>
                            </div>
                            <div class="col-sm-2" style="margin-top:7px;">
                                <b><?php echo $dt['stok_barang']; ?></b>
                            </div>
                            <div class="col-sm-2" style="margin-top:7px;">
                                <b><?php echo $dt['satuan']; ?></b>
                            </div>
                            <div class="col-sm-2">
                                <a role="button" class="btn btn-danger" href="hapusbarang.php?id=<?php echo $dt['id']; ?>">Hapus</a>
                            </div>
                            
                        </div>
                        <?php } ?>
                    </div>
                    

                    <div class="modal-footer">
                        <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
    </div>
