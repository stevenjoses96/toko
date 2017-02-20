<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="fancy.css">
    <?php include('header.php'); ?>
</head>
<body>

    <div id="wrapper">
        <div class="overlay"></div>
        <div class="row coba">
            <div class="col-lg-1">
                 <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">

                    <ul class="nav sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                               <img class="bulat" src="assets/img/toko.png" />
                                <b>TokoKite</b>
                            </a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Akun</b> <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#masukakun" data-toggle="modal"><b>Log In Akun</b></a></li>
                            <li><a href="#daftarakun" data-toggle="modal"><b>Register Akun</b></a></li>
                          </ul>
                        </li>
                    </ul>

                </nav>
                
            </div>
            <div class="col-lg-3">
                

            </div>
            
        </div>
        <!-- Sidebar -->
       <div class="row">
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                        
                        <?php include('petaindex.php'); ?>
                        <?php include('modal-masuk-akun.php'); ?> 
                        <?php include('modal-daftar-akun.php'); ?>                         
                    
                </div>
            </div>
        </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<script type="text/javascript">
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
</body>
</html>
