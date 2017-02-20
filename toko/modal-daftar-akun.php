<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>

<body>
    <div class="modal fade" id="daftarakun" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                        
                        <div class="modal-header">
                            <h2><b>Daftarkan Akun Anda Sekarang</b></h2>
                        </div>

                        <form class="form-horizontal" METHOD="POST" ACTION="cekdaftar.php">
                        <div class="modal-body">

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text" class = "form-control" name="nama" placeholder = "Nama Akun">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "email" class = "form-control" name="email" placeholder = "Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text" class = "form-control" name="username" placeholder = "Username">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "password" class = "form-control" name="password" placeholder = "Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "text" class = "form-control" name="alamat" placeholder = "Alamat ">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type = "number" class = "form-control" name="nomor" placeholder = "Nomor Telepon">
                                </div>
                            </div>

                        </div>
 
                        <div class="modal-footer">
                            <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                            <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>