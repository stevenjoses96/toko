
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
    <script src="hasilcaribarang.php" type="text/javascript"></script>
</head> 
<body onload="initMap()">
<p id="view" style="text-align:center"> </p>
<div id="map" style="height: 500px; width: 100%"></div>
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

function BuatMarker(lat, lng, keterangan,kode_toko,barang) {
  var image = 'assets/img/icon.png';
    var marker = new google.maps.Marker({
    position: new google.maps.LatLng(lat,lng),
    map: map,
    label:keterangan,
    icon: image
  });
    

}    

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -0.022838, lng: 109.33835999999997},
    zoom: 13
  });
  var batas_kiri,batas_kanan,batas_atas,batas_bawah;
        batas_atas=pasar[0].lintang;
        batas_bawah=pasar[0].lintang;
        batas_kiri=pasar[0].bujur;
        batas_kanan=pasar[0].bujur;
        for(i=0;i<pasar.length;i++){
            BuatMarker(pasar[i].lintang,pasar[i].bujur,pasar[i].harga_barang,pasar[i].kd_toko,pasar[i].nama_barang);    
            if(pasar[i].lintang<batas_atas) batas_atas=pasar[i].lintang;
            if(pasar[i].lintang>batas_bawah) batas_bawah=pasar[i].lintang;
            if(pasar[i].bujur<batas_kiri) batas_kiri=pasar[i].bujur;
            if(pasar[i].bujur>batas_kanan) batas_kanan=pasar[i].bujur;
        }
  a=1;
  if (a==1) {
    posisipembeli()
  }
}
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoJe2uurNxjJjbvVUujDFlp1ClST7_T3I">
    </script>

    

</body>
</html>