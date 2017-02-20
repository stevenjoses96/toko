<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>

<body>
    <div class="modal fade" id="daftartoko" role="dialog">
  
            <div class="modal-dialog">
                <div class="modal-content">
                        
                        <div class="modal-header">
                            <h2><b>Daftarkan Toko Anda Sekarang</b></h2>
                        </div>

                        <form class="form-horizontal" METHOD="POST" ACTION="cekdaftartoko.php">
                        <div class="modal-body">

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text" class = "form-control" name="kode_toko" placeholder = "Kode Toko">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text" class = "form-control" name="nama_toko" placeholder = "Nama Toko">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text" class = "form-control" name="deskripsi" placeholder = "Deskripsi ">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text"  name="username" value="<?php echo $username; ?>" hidden>
                                </div>
                            </div>

                        </div>
 
                        <div class="modal-footer">
                            <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                            <button type="submit" name="daftartoko" class="btn btn-primary">Daftar</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>