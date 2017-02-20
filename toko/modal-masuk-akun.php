	<div class="modal fade" id="masukakun" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                    	<h2><b>Masuk Akun Anda</b></h2>
                    </div>
                    <form class="form-horizontal" METHOD="POST" ACTION="beranda.php">
                    <div class="modal-body">                        	
                     
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

                    </div>
 
                    <div class="modal-footer">
                        <h6 class="pull-left">Developed by : &copy; <?php echo date('Y') ?> Sistem Komputer, Universitas Tanjungpura</h6>
                        <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
