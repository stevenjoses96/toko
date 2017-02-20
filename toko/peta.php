<!DOCTYPE html>
<html>
<head>
  <title></title>
  
    <script src="data_toko_db.php" type="text/javascript"></script>
</head> 
<body onload="initMap()">

<div id="map" style="height: 500px; width: 100%;"></div>
    <script type="text/javascript">
  function posisipembeli(){
  navigator.geolocation.getCurrentPosition(showPosition);
}
  function showPosition(position) {
    var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);
    view.innerHTML = " POSISI ANDA Latitude: " + position.coords.latitude + 
    "Longitude: " + position.coords.longitude;
    var marker = new google.maps.Marker({
    position: pos,
    map: map,
    label: 'A'
  });
    var infowindows = new google.maps.InfoWindow({
    content: "POSISI ANDA"
  });
    infowindows.open(map, marker);
 }
  //   posisipembeli(){
  //     navigator.geolocation.getCurrentPosition(function(position) {
  //     var pos = new google.maps.LatLng(position.coords.latitude,
  //                                      position.coords.longitude);
  //     var marker = new google.maps.Marker({
  //   position: pos,
  //   map: map,
  //   label: 'A'
  // });
  //   }
  // }

function BuatMarker(lat, lng, keterangan) {
    var marker = new google.maps.Marker({
    position: new google.maps.LatLng(lat,lng),
    map: map,
    label: keterangan.substr(6,1)
  });
    var infowindow = new google.maps.InfoWindow({
    content: keterangan
  });
    marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

    

}    

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -0.022838, lng: 109.33835999999997},
    zoom: 13
  });
  var batas_kiri,batas_kanan,batas_atas,batas_bawah;
        batas_atas=toko[0].lintang;
        batas_bawah=toko[0].lintang;
        batas_kiri=toko[0].bujur;
        batas_kanan=toko[0].bujur;
        for(i=0;i<toko.length;i++){
            BuatMarker(toko[i].lintang,toko[i].bujur,toko[i].nama);    
            if(toko[i].lintang<batas_atas) batas_atas=toko[i].lintang;
            if(toko[i].lintang>batas_bawah) batas_bawah=toko[i].lintang;
            if(toko[i].bujur<batas_kiri) batas_kiri=toko[i].bujur;
            if(toko[i].bujur>batas_kanan) batas_kanan=toko[i].bujur;
        }

  a=1;
  if (a==1) {
    posisipembeli()
  }

}
function cari_rute(){
        
        
        dari='-0.018847,109.325011';
        ke='-0.020847,109.405011';
        alert(dari+ke);
        
        document.getElementById("rute").innerHTML="";
        detailrute = document.getElementById("rute");
        rute = new GDirections(map, detailrute);
        GEvent.addListener(rute, 'load',
                        function() {
                            document.getElementById("info").innerHTML="Panjang : "+rute.getDistance().meters+" meter <br>Dengan Lama Tempuh : "+rute.getDuration().seconds+" ("+Math.floor(rute.getDuration().seconds / 60)+" menit "+rute.getDuration().seconds % 60+" detik)";

                        }
                       );
        rute.initMap("from: "+dari+" to: "+ke);
        
}
    
//]]>
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoJe2uurNxjJjbvVUujDFlp1ClST7_T3I">
    </script>
    <button id="tambah" onclick="cari_rute()">Semangaat..!!</button>
    <p id="view" style="text-align:center; visibility:hidden;"> </p>
    <div id="info" style></div>
    <div id="rute"></div>

    <div class="row">
        
          <form method="POST" action="beranda-terdekat.php">
          <div class="col-lg-6">
          <input type="text" name="username" value="<?php echo $username;?>" hidden>
          <input type="text" name="password" value="<?php echo $password;?>" hidden>
          <h4><b>Cari Rute Terdekat Ke </b><select name="toko">
          
          <option>Pilih Toko</option>
            <?php
            include('koneksi.php');
              $sql3="SELECT * FROM toko ORDER BY nama_toko ASC ";
          $query8=mysqli_query($db,$sql3) ;
          $jml=mysqli_num_rows($query8);
          while($row8 =mysqli_fetch_array($query8)){
            ?><option><?php echo $row8['nama_toko']; ?></option>
            <?php
          }

            ?>
          </select></h4>
        </div>
        <div class="col-lg-6">
          <button type="submit" name="rute" class="btn btn-info" style="height:40px;"> <b>CARI</b> </button>
        </div>
          </form>
        </div>
</body>
</html>