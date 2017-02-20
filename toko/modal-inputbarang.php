    <div class="modal fade" id="inputbarang" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h2><b>Silahkan Tambah Barang Baru</b></h2>
                    </div>
                        
                    <form class="form-horizontal" METHOD="POST" action="cekinput.php" enctype="multipart/form-data">
                    <div class="modal-body">                            
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type = "hidden" class = "form-control" name="kode_toko" value='<?php echo $kode_toko; ?>'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type = "text" class = "form-control" name="nama_barang" placeholder = "Nama Barang">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type = "number" class = "form-control" name="harga_barang" placeholder = "Harga Barang">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type = "number" class = "form-control" name="stok_barang" placeholder = "Stok Barang">
                            </div>
                            <div class="col-sm-6" style="margin-top:5px;">
                                Satuan per- 
                                <select name="satuan">
                                  <option value="Kilogram">Kilogram</option>
                                  <option value="Bungkus">Bungkus</option>
                                  <option value="Liter">Liter</option>
                                  <option value="Potong">Potong</option>
                                  <option value="Butir">Butir</option>
                                  <option value="Ikat">Ikat</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type = "file" class = "form-control" name="gambar">
                            </div>
                        </div>

                    </div>
 
                    <div class="modal-footer">
                        <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                        <button type="submit" name="cektambah" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
