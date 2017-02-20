<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Lokasi Toko</title>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBoJe2uurNxjJjbvVUujDFlp1ClST7_T3I" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var map;

function load() {
	if (GBrowserIsCompatible()) {
		map = new GMap2(document.getElementById("map"));
		map.setCenter(new GLatLng(-0.046387912384918774, 109.33768825634765), 16);
		map.addControl(new GLargeMapControl());
		map.addControl(new GMapTypeControl());
		map.enableContinuousZoom();
		GEvent.addListener(map, 'click',
						function(overlay,latlng) {
							document.frm.bujur.value=latlng.lng();
							document.frm.lintang.value=latlng.lat();
							
						}
					   );
    	GEvent.addListener(map, "moveend", 
						   function() {
      							var center = map.getCenter();
      							document.getElementById("info").innerHTML="Posisi tengah : "+center.toString();
    						}
						   );

	
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
		
		var location = new GLatLng((batas_atas+batas_bawah)/2 , (batas_kiri+batas_kanan)/2);
		map.setCenter(location, 15);
	}
}
// ]]>
</script>
</head>
<body onload="load()" onunload="GUnload()">
<div id="map" style="width: 100%; height: 400px;float:left"></div>
<div id="info"></div>

<?php
	if(isset($_POST['simpan'])){
		include('koneksi.php');
		$kode_toko= $_POST['kode_toko'];
		$bujur=$_POST['bujur'];
		$lintang=$_POST['lintang'];
		$sql="UPDATE `toko` SET `lintang` = '$lintang', `bujur` = '$bujur' WHERE `toko`.`kode_toko` = '$kode_toko'";
		$res=mysqli_query($db,$sql);
	}
?>
    
<div style="width:100%">
<form name="frm" method="post" action="#">
<?php $kode_toko= $_POST['kode_toko']; ?>
<div class="form-group">
	<input type="text"   name="kode_toko" value="<?php echo $kode_toko; ?>" hidden />
</div>
<div class="form-group">
	Longitude (Bujur) : <input type="text"  class = "form-control" name="bujur" readonly />
</div>
<div class="form-group">
	Latitude (Lintang) : <input type="text"  class = "form-control" name="lintang" readonly />
</div>
<div class="form-group">
	<input type="submit"  class="btn btn-warning btn-lg" name="simpan" value="simpan" />
</div>
</form>
</div>
</body>
</html>