<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
    <script src="data_pasar_db.php" type="text/javascript"></script>
</head>
<?php
  if (isset($_POST['rute'])) {
    $toko=$_POST['toko'];
     include('koneksi.php');
     $sqlbujur= "SELECT * FROM toko WHERE nama_toko = '$toko' ";
     $bujurin=mysqli_query($db,$sqlbujur);
     $count=mysqli_num_rows($bujurin);
     $bjr0=mysqli_fetch_assoc($bujurin);?>
     <p id="tujuan"><?php
     echo $bjr0['lintang'].",".$bjr0['bujur'];?></p>
     <?php
  }
?>
<body onload="cari_rute()">
<p id="awal" style="text-align:center " display="none"> </p>

    <script type="text/javascript">
        var map;
var rute;
var detailrute;
  navigator.geolocation.getCurrentPosition(showPosition);
  function showPosition(position) {
    awal.innerHTML = position.coords.latitude+","+position.coords.longitude;

  }

function cari_rute(){
        var MyOptions ={
          zoom : 14
        }
        map = new GMap2(document.getElementById("map"),MyOptions);
        dari=document.getElementById("awal").innerHTML;
        ke=document.getElementById("tujuan").innerHTML;
        document.getElementById("rute").innerHTML="";
        detailrute = document.getElementById("rute");
        rute = new GDirections(map, detailrute);
        GEvent.addListener(rute, 'load',
                        function() {
                            document.getElementById("info").innerHTML="Panjang : "+rute.getDistance().meters+" meter <br>Dengan Lama Tempuh : "+rute.getDuration().seconds+" ("+Math.floor(rute.getDuration().seconds / 60)+" menit "+rute.getDuration().seconds % 60+" detik)";

                        }
                       );
        rute.load("from: "+dari+" to: "+ke);       
}
    </script>
  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBoJe2uurNxjJjbvVUujDFlp1ClST7_T3I" type="text/javascript"></script>
    <div id="informasi">
    <div id="map" style="height: 500px; width: 100%"></div>
    <div id="info"></div>
    <div id="rute"></div>  
    </div>
    
</body>
</html>